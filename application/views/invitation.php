<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Daftar Konfirmasi Undangan</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/jumbotron/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" />

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>

<body>

    <main>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img">
                        <title>Bootstrap</title>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><g id="Layer_20" data-name="Layer 20"><path d="M61,29a1,1,0,0,0-.1-.41,1,1,0,0,0-.4-1.27L53,23V6a1,1,0,0,0-1-1H12a1,1,0,0,0-1,1V23L3.5,27.34a1,1,0,0,0-.4,1.27c-.33.92,0,29.68-.07,30.65A1,1,0,0,0,4,60H60a1,1,0,0,0,1-.74C61.07,58.8,61,29.44,61,29Zm-8,1h4.18L53,33.4Zm-.37,6.26L59,31.12V57.27L40.18,46.36Zm5-8.26H53V25.31ZM13,7H51V35L38.32,45.29c-8.21-4.51-4.45-4.5-12.64,0L13,35ZM11,33.4,6.82,30H11Zm.37,2.88L23.82,46.36,5,57.27V31.12ZM11,28H6.33L11,25.31ZM7.72,58,32,43.94,56.28,58Z"/><path d="M25.29,24.85,32,31.58c.48-.47,7.41-7.4,7.6-7.6,4.32-4.54-2.18-11-6.73-6.72l-.87.87C26.91,12,19.12,19.76,25.29,24.85Z"/></g></svg>
                    </svg>
                    <span class="fs-4">Daftar Konfirmasi Undangan</span>
                </a>
            </header>

            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-5">
                    <?php  
                        $query = $this->db->query('SELECT SUM(jumlah) as jumlah FROM undangan');                        
                    ?>

                    <h1 class="display-5 fw-bold">Total Undangan = <?php echo $query->row()->jumlah; ?></h1>
                </div>
            </div>

            <div class="row align-items-md-stretch">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama </th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $iLoop = 1;
                        $GET_DATA = $this->db->query("SELECT * FROM undangan");
                        foreach($GET_DATA->result() as $rsData):
                        ?>
                        <tr>
                            <td><?php echo $iLoop; ?></td>
                            <td><?php echo $rsData->nama; ?></td>
                            <td><?php echo $rsData->jumlah; ?></td>
                        </tr>
                        <?php
                            $iLoop++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>

            <footer class="pt-3 mt-4 text-muted border-top">
                &copy; 2021
            </footer>
        </div>
    </main>

</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</html>