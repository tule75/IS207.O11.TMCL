

var data = {
    "prices": [7114.25, 7126.6, 3330.2 /* ... */],
    "dates": ["02 Jun 2023", "05 Jun 2023","05 July 2023" /* ... */]
};

// Create an object to store monthly averages
var monthlyAverages = {};

// Loop through the data
for (var i = 0; i < data.dates.length; i++) {
    var dateParts = data.dates[i].split(" ");
    // datePart 0 : date
    // dataPart 1 : month
    // dataPart 2 : year
    var monthOfYear = dateParts[1] + " " + dateParts[2];
    var price = data.prices[i];

    // if monthOfYear in monthyAverage object is not exists, set sum and count : 0 
    if (!monthlyAverages[monthOfYear]) {
        monthlyAverages[monthOfYear] = {
            sum: 0,
            count: 0
        };
    }
    // else, total  index value of (dates[] = monthOfYear) in monthlyAverages
    monthlyAverages[monthOfYear].sum += price;
    //  total index of monthOfYear in monthAverages
    monthlyAverages[monthOfYear].count++;
}


// Calculate and display monthly averages
for (var key in monthlyAverages) {
    console.log(monthlyAverages[key].count);
    var average = monthlyAverages[key].sum / monthlyAverages[key].count;
    // giu lai 2 so 0 sau dau ,
    console.log(key + " - Average Price: " + average);
}
// draw dasboard

var chartData = Object.keys(monthlyAverages).map(function(key) {
    return { 
        monthYear: key, 
        average: monthlyAverages[key].sum / monthlyAverages[key].count
    };
});
console.log(chartData)
const chartContainer = document.querySelector('#chart');

console.log( chartData.map(function(item) { return item.monthYear;  }))
console.log( chartData.map(function(item) { return item.average;  }))
// total monthly
const monthSelect = document.querySelector('#monthSelect');

for(var key in monthlyAverages) {
    var optionElement = document.createElement('option');
    optionElement.value = key;
}
var options = {
    series: [{
        name: 'Average Price',
        data: chartData.map(function(item) {
            return item.average;
        })
    }],
    chart: {
        type: 'bar'
    },
    plotOptions: {
        bar: {
        borderRadius: 4,
        vertical: true,
        }
    },
    dataLabels: {
        enabled: false
    },
    xaxis: {
        categories: chartData.map(function(item) {
            return item.monthYear;
        })
    } 
}

var chartElement = new ApexCharts(chartContainer, options)
chartElement.render();