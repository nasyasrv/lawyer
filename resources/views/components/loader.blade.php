<div id="loading-screen">
    <div class="spinner"></div>
</div>

<style>
    body.loading {
        overflow: hidden;
    }

    #loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-color: #fff;
        z-index: 9999;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .spinner {
        border: 8px solid #f3f3f3;
        border-top: 8px solid #3498db;
        border-radius: 50%;
        width: 70px;
        height: 70px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<script>
    // Tambahkan class "loading" ke body
    document.body.classList.add('loading');

    // Hilangkan loader setelah semua halaman termuat
    window.addEventListener('load', function () {
        setTimeout(() => {
            document.getElementById('loading-screen').style.display = 'none';
            document.body.classList.remove('loading');
        }, 400); // kasih delay biar CSS sempat masuk
    });
</script>
