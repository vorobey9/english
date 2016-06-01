


$(document).ready(function(){


    /*
     *
     * The script for Charts (Графики)
     * */
    var ctx = $('#Test');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Present Simple 1', 'Present Simple Perfect Continious', 'Present Simple Continious', 'Present Simple 4', 'Present Simple 5', 'Present Simple 6','Present Simple 7', 'Present Simple 8','Present Simple 9', 'Present Simple 10','Present Simple 11', 'Present Simple 12'],
            datasets: [{
                label: '# Успішність складання тестів',
                data: [50, 40, 100, 70, 50,50,44,33,76,45,67,35],
                backgroundColor:'#1d517b',
                hoverBackgroundColor: "#7B0001"
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    var ctx = $('#Gap');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Present Simple 1', 'Present Simple Perfect Continious', 'Present Simple Continious', 'Present Simple 4', 'Present Simple 5', 'Present Simple 6','Present Simple 7', 'Present Simple 8','Present Simple 9', 'Present Simple 10','Present Simple 11', 'Present Simple 12'],
            datasets: [{
                label: '# Успішність складання   пропущене слово',
                data: [50, 40, 100, 70, 50,50,44,33,76,45,67,35],
                backgroundColor:'#1d517b',
                hoverBackgroundColor: "#7B0001"
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });



    var ctx = $('#Puzzle');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Present Simple 1', 'Present Simple Perfect Continious', 'Present Simple Continious', 'Present Simple 4', 'Present Simple 5', 'Present Simple 6','Present Simple 7', 'Present Simple 8','Present Simple 9', 'Present Simple 10','Present Simple 11', 'Present Simple 12'],
            datasets: [{
                label: '# Успішність складання пазлів',
                data: [50, 40, 100, 70, 50,50,44,33,76,45,67,35],
                backgroundColor:'#1d517b',
                hoverBackgroundColor: "#7B0001"
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
    });
