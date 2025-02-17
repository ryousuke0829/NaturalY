const numUserBYS = document.getElementById('annualNumberOfUserBYSChart');

new Chart(numUserBYS, {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'March', 'April', 'May', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
    datasets: [{
      label: 'Annual Number of User of Boost Yield Service',
      data: [12, 25, 34, 50, 45, 60, 70, 77, 81, 85, 67, 90],
      fill: false,
      borderColor: 'rgb(75, 192, 192)',
      tension: 0.1
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