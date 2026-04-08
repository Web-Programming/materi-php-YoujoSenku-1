<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Dasar PHP Form - POST</title>
</head>
<body>
    <h2>Contoh Form POST</h2>
    <form method="POST" action="proses_keuangan.php">
        <label for="tanggalTransaksi">Tanggal Transaksi</label>
        <input id="tanggalTransaksi" name="tanggalTransaksi" type="date">
        <br/>
        <label for="jenisTransaksi">Jenis Transaksi</label>
        <select id="jenisTransaksi" name="jenisTransaksi">
            <option value="" <?= $jenisTransaksi === '' ? 'selected' : '' ?>>Pilih Jenis Transaksi</option>
            <option value="Pemasukkan" <?= $jenisTransaksi === 'Pemasukkan' ? 'selected' : '' ?>>Pemasukkan</option>
            <option value="Pengeluaran" <?= $jenisTransaksi === 'Pengeluaran' ? 'selected' : '' ?>>Pengeluaran</option>
        </select>
        <br/>
        <label for="pesan">Nominal</label>
        <input id="pesan" name="nominal" type="number" min="0" step="any" placeholder="Isi Nominal Anda">
        <br/>
        <label for="pesan">Keterangan</label>
        <textarea id="pesan" name="pesan" rows="4" type="text" placeholder="Isi Pesan Anda"></textarea>
        <br/>
        <button type="submit" name="simpan">Simpan Data</button>
    </form>
</body>
</html>