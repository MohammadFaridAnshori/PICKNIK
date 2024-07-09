document.addEventListener('DOMContentLoaded', (event) => {
    // Data penjualan tiket (contoh data)
    const salesData = {
        labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
        datasets: [{
            label: 'Penjualan Tiket 2024',
            data: [120, 190, 300, 500, 200, 300, 400, 600, 700, 800, 900, 1000],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Konfigurasi chart
    const config = {
        type: 'bar',
        data: salesData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Membuat chart
    const salesChart = new Chart(
        document.getElementById('salesChart'),
        config
    );
});
