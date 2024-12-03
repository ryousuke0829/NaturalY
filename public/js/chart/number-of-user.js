const ctx = document.getElementById('myChart');
      
new Chart(ctx, {
    type: 'bar',
    data: {
    labels: ['Jan', 'Feb', 'March', 'April', 'May', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
    datasets: [{
        label: 'Annual Numbers of User',
        data: [6, 11, 12, 20, 23, 27, 36, 39, 45, 49, 50, 55],
        borderWidth: 1
    }]
    },
    options: {
    scales: {
        y: {
        beginAtZero: true
        }
    }
    }
});