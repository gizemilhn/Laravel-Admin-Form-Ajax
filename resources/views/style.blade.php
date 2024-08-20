<style>
    body{
        background-color: #475161;
        font-family: Arial,sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    .sidebar{
        background-color: #1a202c;
        color: #a0aec0;
        width: 200px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1000;
        margin: 0;
        padding: 0;
    }
    #sidebar h1 {
        font-size: 24px;
        margin-bottom: 20px;
        margin-left: 10px;
        margin-top: 10px;

    }#sidebar .logo {
         text-decoration: none;
         color: #a0aec0;
         font-weight: bold;
     }

    #sidebar ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #sidebar .sidebar-item a {
        text-decoration: none;
        color: #a0aec0;
        font-size: 18px;
        display: block;
        padding: 10px;
        border-radius: 4px; /
    transition: background-color 0.3s ease, color 0.3s ease;
    }

    #sidebar .sidebar-item a:hover {
        background-color: #a0aec0;
        color: #1a202c;
    }


    #nav{
        background-color: #1a202c;
        color: #a0aec0;
        height: 80px;
        top: 0;
        margin-left:200px;
        padding: 10px 20px;
    }
    .nav-item{
        font-size: 12px;
    }
    .nav-item:hover{
        color: #e2e8f0;
    }

    #nav .navbar-brand {
        color: #a0aec0;
        font-weight: bold;
        font-size: 24px;
        text-decoration: none;
    }

    #nav .navbar-nav {
        display: flex;
        align-items: center;
    }

    #nav .nav-link {
        color: #a0aec0;
        font-size: 18px;
        padding: 10px 15px;
        text-decoration: none;
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    #nav .nav-link:hover {
        color: #fff;
        background-color: #a0aec0;
        border-radius: 4px;
    }

    #nav .form-inline {
        display: flex;
        align-items: center;
    }

    #nav .form-control {
        margin-right: 10px;
    }

    .footer{
        background-color: #1a202c ;
        color: #a0aec0;
        height: 70px;
        text-align: center;
        padding: 1rem 0;
        position: relative;
        width: 100%;
        margin-top: auto;
    }
    .container {
        flex: 1; /* İçeriğin footer ile uyumlu kalmasını sağlar */
        padding: 20px;
    }


    .form-wrapper {
        background-color: #2d3748;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;

    }

    .form-container {
        background-color: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 600px;
        margin:0;
    }

    .form-label {
        display: block; /* Etiketin blok olarak görünmesini sağlar */
        margin-bottom: 8px; /* Etiket ile input arasında boşluk bırakır */
        font-size: 16px; /* Yazı tipi boyutu */
        font-weight: bold; /* Kalın yazı */
        color: #333; /* Yazı rengi */
    }

    .form-control {
        width: 100%; /* Input genişliği formun genişliğine uyum sağlar */
        padding: 8px; /* Input içine iç boşluk ekler */
        margin-bottom: 10px; /* Input ile diğer öğeler arasında boşluk bırakır */
        border: 1px solid #ccc; /* Sınır rengi */
        border-radius: 4px; /* Yuvarlatılmış kenarlar */
    }

    .text-danger {
        color: #e53e3e; /* Hata mesajları için kırmızı renk */
        font-size: 14px; /* Yazı tipi boyutu */
        margin-top: 5px; /* Mesaj ile input arasında boşluk bırakır */
    }

    .btn-outline-success {
        background-color: #f0f0f0; /* Açık gri arka plan rengi */
        border: 1px solid #ccc; /* Kenar rengi */
        color: #333; /* Yazı rengi */
        padding: 10px 20px; /* İç boşluk */
        border-radius: 4px; /* Yuvarlatılmış köşeler */
        cursor: pointer; /* Fare imlecini işaretçi yapar */
        transition: background-color 0.3s ease; /* Arka plan renginin geçiş efekti */
        margin-top: 10px; /* Buton ile diğer öğeler arasında boşluk bırakır */
    }

    .btn-outline-success:hover {
        background-color: #d0d0d0; /* Hover durumunda arka plan rengi */
        border-color: #bbb; /* Hover durumunda kenar rengi */
    }
    .table {
        width: calc(100% - 40px); /* Sağ ve sol boşluk bırakır */
        margin: 20px auto;
        color: #212529;
        border-collapse: collapse;
    }

    .table-wrapper {
        margin: 20px;
        padding: 20px;
        background-color: #ffffff; /* Beyaz arka plan */
        border-radius: 8px; /* Yuvarlatılmış köşeler */
        box-shadow: 0 4px 8px rgba(0,0,0,0.1); /* Hafif gölge efekti */
        overflow-x: auto; /* Taşan içeriği kaydırma */
    }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        border-collapse: collapse;
        margin-left: 100px;
    }

    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;


    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
        background-color: #a0aec0;

    }
    .table-head{
        margin-top: 10px;
        margin-left: 100px;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;

    }

    .table-bordered {
        border: 1px solid #dee2e6;

    }

</style>
