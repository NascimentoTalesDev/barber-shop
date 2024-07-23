const myChart4 = document.getElementById("my-chart4");
const myChart5 = document.getElementById("my-chart5");
const myChart6 = document.getElementById("my-chart6");
const myChart7 = document.getElementById("my-chart7");

new Chart(myChart4, {
  type: "bar",
  data: {
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    datasets: [
      {
        label: "Months of Year 2024",
        data: [10, 8, 3, 5, 2, 7, 1, 9, 4, 6, 11, 12],
        borderWidth: 1,
      },
    ],
  },
  options: {
    scales: {
      y: {
        beginAtZero: true,
      },
    },
  },
});

new Chart(myChart5, {
  type: "pie",
  data: {
    labels: ["Jan", "Feb", "Mar"],
    datasets: [
      {
        label: "My First Dataset",
        data: [10, 8, 3],
        backgroundColor: [
          "rgb(255, 99, 132)",
          "rgb(54, 162, 235)",
          "rgb(255, 205, 86)",
        ],
        hoverOffset: 4,
      },
    ],
  },
});

new Chart(myChart6, {
  type: "line",
  data: {
    labels: [
      "Jan",
      "Feb",
      "Mar",
      "Apr",
      "May",
      "Jun",
      "Jul",
      "Aug",
      "Sep",
      "Oct",
      "Nov",
      "Dec",
    ],
    datasets: [
      {
        label: "My First Dataset",
        data: [10, 8, 3, 5, 2, 7, 1, 9, 4, 6, 11, 12],
        fill: true,
        borderColor: "rgb(75, 192, 192)",
        tension: 0.1,
      },
    ],
  },
});

new Chart(myChart7, {
  type: "bubble",
  data: {
    datasets: [
      {
        label: "First Dataset",
        data: [
          {
            x: 20,
            y: 30,
            r: 15,
          },
          {
            x: 40,
            y: 10,
            r: 10,
          },
        ],
        backgroundColor: "rgb(255, 99, 132)",
      },
    ],
  },
});
