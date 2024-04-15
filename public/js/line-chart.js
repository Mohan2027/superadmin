
function processAccountData(data) {
  
  const monthlyCounts = {};


  data.forEach(entry => {

      const createdAt = new Date(entry.created_at);
      const monthYear = createdAt.toLocaleString('en-US', { month: 'short', year: 'numeric' });

      if (monthlyCounts[monthYear]) {
          monthlyCounts[monthYear]++;
      } else {
          monthlyCounts[monthYear] = 1;
      }
  });


  const labels = Object.keys(monthlyCounts);
  const counts = Object.values(monthlyCounts);

  return { labels, counts };
}

function renderLineChart(labels, counts) {

  const ctx = document.getElementById('myLineChart').getContext('2d');
  const chart = new Chart(ctx, {
      type: 'line',
      data: {
          labels: labels,
          datasets: [{
              label: 'Accounts Created by Month',
              data: counts,
              borderColor: 'rgb(75, 192, 192)',
              tension: 0.1
          }]
      },
      options: {
        scales: {
            y: {
                beginAtZero: true,
                stepSize: 5,
                max: 50 
              }
          }
      }
  });
}


fetch('/line-chart')
  .then(response => response.json())
  .then(data => {
     
      const { labels, counts } = processAccountData(data);

      
      renderLineChart(labels, counts);
  })
  .catch(error => {
      console.error('Error fetching data:', error);
  });
