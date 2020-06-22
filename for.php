<?php
echo "<form name=form1 metho=post>";
	echo "Tanggal";
	echo "<select name=tanggal>";

	for($tanggal=1; $tanggal<=31; $tanggal++)
	{
		echo "<option value=$tanggal> $tanggal </option>";
	}
	
	echo "</select>";
	
echo "<select name=bulan>";
	for($bulan=1; $bulan<=12; $bulan++)
	{
		echo "<option value=$bulan> $bulan </option>";
	}
	echo "</select>";

echo "<select name=tahun>";
	for($tahun=1900; $tahun<=2018; $tahun++)
	{
		echo "<option value=$tahun> $tahun </option>";
	}
	echo "</select>";
	echo "</form>";
	?>