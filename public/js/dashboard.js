

var data = {
    "prices": [7114.25, 7126.6, 3330.2 , 434.333, 493.93],
    "dates": ["02 Jun 2023", "05 Jun 2023","05 July 2023","15 May 2023" ,"25 May 2023" /* ... */]
};
var staff = {
    "name": [7114.25, 7126.6, 3330.2 , 434.333, 493.93],
    "countOder": ["02 Jun 2023", "05 Jun 2023","05 July 2023","15 May 2023" ,"25 May 2023" /* ... */]
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
var chartData = Object.keys(monthlyAverages).map(function(key) {
    return { 
        monthYear: key, 
        average: monthlyAverages[key].sum
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

// bar chart
const barContainer = document.querySelector('#bar-chart');

const barChartOptions = {
    series: [
      {
        data: [10, 8, 6, 4, 2],
      },
    ],
    chart: {
      type: 'bar',
      height: 350,
      toolbar: {
        show: false,
      },
    },
    colors: ['#246dec', '#cc3c43', '#367952', '#f5b74f', '#4f35a1'],
    plotOptions: {
      bar: {
        distributed: true,
        borderRadius: 4,
        horizontal: false,
        columnWidth: '40%',
      },
    },
    dataLabels: {
      enabled: false,
    },
    legend: {
      show: false,
    },
    xaxis: {
      categories: ['Laptop', 'Phone', 'Monitor', 'Headphones', 'Camera'],
    },
    yaxis: {
      title: {
        text: 'Count',
      },
    },
  };
var chartElement = new ApexCharts(barContainer, barChartOptions)
chartElement.render();

// AREA CHART
const areaContainer = document.querySelector('#area-chart');

const areaChartOptions = {
    series: [
      {
        name: 'Purchase Orders',
        data: [31, 40, 28, 51, 42, 109, 100],
      },
      {
        name: 'Sales Orders',
        data: [11, 32, 45, 32, 34, 52, 41],
      },
    ],
    chart: {
      height: 350,
      type: 'area',
      toolbar: {
        show: false,
      },
    },
    colors: ['#4f35a1', '#246dec'],
    dataLabels: {
      enabled: false,
    },
    stroke: {
      curve: 'smooth',
    },
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
    markers: {
      size: 0,
    },
    yaxis: [
      {
        title: {
          text: 'Purchase Orders',
        },
      },
      {
        opposite: true,
        title: {
          text: 'Sales Orders',
        },
      },
    ],
    tooltip: {
      shared: true,
      intersect: false,
    },
  };
  
  const areaChart = new ApexCharts(
    areaContainer,
    areaChartOptions
  );
  areaChart.render();