<html>
	<head>
		<title>Native MVC Example</title>
		<link rel="stylesheet" href="/mvc-example/assets/css/bootstrap.css" />
		<script type="text/javascript" src="/mvc-example/assets/js/bootstrap.js"></script>
	</head>
	<body>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">&nbsp;</div>
				<div class="col-md-4"><h3>Data Mahasiswa</h3>
					<table class="table table-responsive table-bordered table-striped">
					<tr>
            <td>No</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Created_at</td>
            <td>Deleted_at</td>
        </tr>
        <?php
            foreach ($rs as $mahasiswa => $list) {
                if (is_null($list['Deleted_at'])) {
                    echo '<tr>';
                    echo '<td><a href="?act=tampil-data&id='.$list['id'].'">'.$list['id'].'</a></td>';
                    echo '<td>'.$list['nim'].'</td>';
                    echo '<td>'.$list['nama'].'</td>';
                    echo '<td>'.$list['Created_at'].'</td>';
                    echo '<td><a href="?act=delete&id='.$list['id'].'">Delete</a></td>';
                    echo '</tr>';
                }
            }
        ?>
    </table>
</div>
<div class="col-md-4">&nbsp;</div>
			</div>
		</div>
	</body>
</html>
