<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Movie Rent</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?=base_url()?>css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div id="wrapper">
      <div id="inner">
          <div id="header">
              <div id="nav">
                  Hello <b>Admin</b> <b><?php echo $USERNAME; ?></b> <br> <a href="account.html">My Account</a> | <a href="chart.html">Chart Sewa</a> | <a href="<?php echo site_url('admin/c_admin/logout'); ?>">Log Out</a>
              </div><!-- end nav -->
              <a href="#"><img src="<?=base_url()?>images/header_1.jpg" width="744" height="223" alt="Harry Potter cd" /></a>
              <!--<a href="#"><img src="images/header_2.jpg" width="744" height="48" alt="" /></a>-->
          </div><!-- end header -->
          
          
			<div class="inner">
					<div class="menu3">
						<a href="pegawai-datafilm.html" class="current">Data Film</a>
						<a href="pegawai-tambahfilm.html">Tambah Film</a>
						<a href="pegawai-transaksi.html">Transaksi</a>
						<a href="pegawai-pengembalian.html">Pengembalian</a>
					</div>
                      <p><h3><b>DATA FILM</b></h3></p>
                      <table border="1" style="width: 540px;"><tbody>
							<tr><th>Nama Film</th><th>Kategory</th><th>Sinopsis</th><th>Harga</th><th>Status</th></tr>
							<tr><td>So Close</td><td>Action</td><td>Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa </td><td>RP. 1234</td><td>Available</td></tr>
							<!--
							<tr><td>Naked Weapon</td><td>Fiction</td><td>Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa </td><td>RP. 1234</td><td>Available</td></tr>
							<tr><td>Elektra</td><td>Musical</td><td>Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa </td><td>RP. 1234</td><td>No</td></tr>
							<tr><td>So Close</td><td>Action</td><td>Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa </td><td>RP. 1234</td><td>No</td></tr>
							<tr><td>Wanted</td><td>Wanted</td><td>Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa </td><td>RP. 1234</td><td>Available</td></tr>
							<tr><td>Death Race</td><td>Action</td><td>Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa </td><td>RP. 1234</td><td>Available</td></tr>
							<tr><td>Tokyo Drift</td><td>Action</td><td>Film ini merupakan film yang dibintangi oleh dengan meceritakan peristiwa </td><td>RP. 1234</td><td>Available</td></tr>
							-->
							</tbody>
					  </table>
            </div><!-- end .inner -->
          </div><!-- end body -->
          
          <div class="clear"></div>
          <div id="footer">
              Kelompok (07) MPPL-E
          </div><!-- end footer -->
  </div><!-- end wrapper -->
</body>
</html>