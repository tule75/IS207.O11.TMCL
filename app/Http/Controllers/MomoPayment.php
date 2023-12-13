<?php

namespace App\Http\Controllers;

use Brick\Math\BigInteger;
use Brick\Math\BigNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class MomoPayment extends Controller
{
    //
    public function send(Request $request)
    {
        $endpoint = 'https://test-payment.momo.vn/v2/gateway/api/create';
        $accessKey = 'F8BBA842ECF85';
        $secretKey = 'K951B6PE1waDMi640xX08PD3vg6EkVlz';
        $orderInfo = 'payWithMethod';
        $partnerCode = 'MOMO';
        $redirectUrl = 'localhost:8000/momo';
        $ipnUrl = 'localhost:8000/momo/callback';
        $amount = (string)$request->amount;
        $orderId = $partnerCode . time();
        $requestId = $orderId;
        $requestType = 'captureWallet';
        $extraData = '';
        $orderGroupId = '';
        $autoCapture = true;
        $lang = 'vi';

        $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = [
            "partnerCode" => $partnerCode,
            'partnerName' => "Test",
            'storeId' => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => $lang,
            'requestType'=> $requestType,
            'autoCapture'=> $autoCapture,
            'extraData' => $extraData,
            'orderGroupId'=> $orderGroupId,
            'signature' => $signature
        ];

        $response = Http::withHeaders([
            'Content-Type: application/json',
        ])->post($endpoint, $data);


        $result = $response->body();

        $jsonResult = json_decode($result, true);

        // /Điều hướng đến payUrl nếu có
        if ($jsonResult['payUrl'] !== null) {
            return redirect()->to($jsonResult['payUrl']);
        }
        return $result;
    }
}
