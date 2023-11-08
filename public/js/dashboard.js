

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


// // Calculate and display monthly averages
// for (var key in monthlyAverages) {
//     var average = monthlyAverages[key].sum / monthlyAverages[key].count;
//     // giu lai 2 so 0 sau dau ,
//     console.log(key + " - Average Price: " + average);
// }
// draw dasboard

var chartData = Object.keys(monthlyAverages).map(function(key) {
    return { 
        monthYear: key, 
        average: monthlyAverages[key].sum / monthlyAverages[key].count
    };
});


// total monthly
const monthSelected = document.querySelector('#monthSelect');
chartData.forEach((month, index) => {
    const optionSelects = document.createElement('option');
    optionSelects.name = month.monthYear.split(" ")[0];
    optionSelects.setAttribute("class", "month");
    optionSelects.innerHTML = month.monthYear.split(" ")[0];
    optionSelects.value = month.average;
    monthSelected.appendChild(optionSelects);
})
//  display revenue result
monthSelected.addEventListener("change", function(event) {
    // Get the selected value
    const selectedValue = event.target.options[event.target.selectedIndex].value;
    const selectedName= event.target.options[event.target.selectedIndex].name;

    // Check if a monthRevenue element already exists and update its value, or create a new one
    let monthRevenue = document.querySelector('.RevenueResults');
    let showMonth = document.querySelector('.mResult');

    if (!monthRevenue && !showMonth) {
        showMonth = document.createElement('p');
        monthRevenue = document.createElement('span');
        monthRevenue.setAttribute("class", "RevenueResults");
        showMonth.setAttribute("class", "mResult");
        document.querySelector('.rev-result').appendChild(monthRevenue);
        document.querySelector('.rev-result').appendChild(showMonth);
    }
        showMonth.textContent = "Select :" + " " + selectedName;
        monthRevenue.innerHTML = selectedValue;
        document.querySelector('.no-data').style.display = 'none'

});
const chartContainer = document.querySelector('#chart');


// bar chart
var options = {
    series: [{
        name: 'Average Month',
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
// stacked chart
const stackChart = document.querySelector('#stackChart')
 var options = {
          series: [44, 55, 13, 43, 22],
          chart: {
          width: 380,
          type: 'pie',
        },
        labels: ['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 200
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };


var stackElement = new ApexCharts(stackChart, options)

stackElement.render();