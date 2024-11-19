<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Penilaian Bibit Cabai</title>
  <style>
    .rating label {
      font-size: 1.5em;
      color: #ffd700;
      cursor: pointer;
    }
    .rating input {
      display: none;
    }
    .rating label:hover,
    .rating label:hover ~ label,
    .rating input:checked ~ label {
      color: #ffdd55;
    }
  </style>
</head>
<body>

<h2>Form Penilaian Bibit Cabai</h2>
<form onsubmit="return validateForm()">

  <!-- Pilihan Alternatif Bibit -->
  <label for="alternatif">Pilih Bibit Cabai:</label>
  <select id="alternatif" name="alternatif">
    <option value="HIBRIDIA F1">HIBRIDIA F1</option>
    <option value="SONAR F1">SONAR F1</option>
    <option value="HOT BEAUTY">HOT BEAUTY</option>
    <option value="TANJUNG F1">TANJUNG F1</option>
    <option value="PELITA F1">PELITA F1</option>
  </select>

  <!-- Kriteria Penilaian -->
  <h3>Kriteria Penilaian (Skala 1-5)</h3>

  <!-- Tinggi Tanaman -->
  <label for="tinggiTanaman">Tinggi Tanaman:</label>
  <div class="rating">
    <input type="radio" id="tinggi5" name="tinggiTanaman" value="5"><label for="tinggi5">☆</label>
    <input type="radio" id="tinggi4" name="tinggiTanaman" value="4"><label for="tinggi4">☆</label>
    <input type="radio" id="tinggi3" name="tinggiTanaman" value="3"><label for="tinggi3">☆</label>
    <input type="radio" id="tinggi2" name="tinggiTanaman" value="2"><label for="tinggi2">☆</label>
    <input type="radio" id="tinggi1" name="tinggiTanaman" value="1"><label for="tinggi1">☆</label>
  </div>

  <!-- Jumlah Cabang -->
  <label for="jumlahCabang">Jumlah Cabang:</label>
  <div class="rating">
    <input type="radio" id="cabang5" name="jumlahCabang" value="5"><label for="cabang5">☆</label>
    <input type="radio" id="cabang4" name="jumlahCabang" value="4"><label for="cabang4">☆</label>
    <input type="radio" id="cabang3" name="jumlahCabang" value="3"><label for="cabang3">☆</label>
    <input type="radio" id="cabang2" name="jumlahCabang" value="2"><label for="cabang2">☆</label>
    <input type="radio" id="cabang1" name="jumlahCabang" value="1"><label for="cabang1">☆</label>
  </div>

  <!-- Jumlah Daun -->
  <label for="jumlahDaun">Jumlah Daun:</label>
  <div class="rating">
    <input type="radio" id="daun5" name="jumlahDaun" value="5"><label for="daun5">☆</label>
    <input type="radio" id="daun4" name="jumlahDaun" value="4"><label for="daun4">☆</label>
    <input type="radio" id="daun3" name="jumlahDaun" value="3"><label for="daun3">☆</label>
    <input type="radio" id="daun2" name="jumlahDaun" value="2"><label for="daun2">☆</label>
    <input type="radio" id="daun1" name="jumlahDaun" value="1"><label for="daun1">☆</label>
  </div>

  <!-- Umur Panen -->
  <label for="umurPanen">Umur Panen:</label>
  <div class="rating">
    <input type="radio" id="panen5" name="umurPanen" value="5"><label for="panen5">☆</label>
    <input type="radio" id="panen4" name="umurPanen" value="4"><label for="panen4">☆</label>
    <input type="radio" id="panen3" name="umurPanen" value="3"><label for="panen3">☆</label>
    <input type="radio" id="panen2" name="umurPanen" value="2"><label for="panen2">☆</label>
    <input type="radio" id="panen1" name="umurPanen" value="1"><label for="panen1">☆</label>
  </div>

  <!-- Harga Bibit -->
  <label for="hargaBibit">Harga Bibit:</label>
  <div class="rating">
    <input type="radio" id="harga5" name="hargaBibit" value="5"><label for="harga5">☆</label>
    <input type="radio" id="harga4" name="hargaBibit" value="4"><label for="harga4">☆</label>
    <input type="radio" id="harga3" name="hargaBibit" value="3"><label for="harga3">☆</label>
    <input type="radio" id="harga2" name="hargaBibit" value="2"><label for="harga2">☆</label>
    <input type="radio" id="harga1" name="hargaBibit" value="1"><label for="harga1">☆</label>
  </div>

  <!-- Submit Button -->
  <button type="submit">Kirim Penilaian</button>
</form>

<script>
  function validateForm() {
    const requiredFields = ['tinggiTanaman', 'jumlahCabang', 'jumlahDaun', 'umurPanen', 'hargaBibit'];
    for (let field of requiredFields) {
      if (!document.querySelector(input[name="${field}"]:checked)) {
        alert("Harap berikan penilaian pada semua kriteria!");
        return false;
      }
    }
    return true;
  }
</script>

</body>
</html>