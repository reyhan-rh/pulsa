<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Pulsa</title>
    <script>
        // Fungsi untuk update harga saat produk dipilih
        function updateHarga() {
            var selectProduk = document.getElementById("produk");
            var hargaProduk = selectProduk.options[selectProduk.selectedIndex].getAttribute('data-harga');
            var produkNama = selectProduk.options[selectProduk.selectedIndex].text;
            document.getElementById("harga").innerText = "Harga: Rp" + hargaProduk;

            // Menyimpan produk dan harga ke dalam hidden input untuk dikirim ke WhatsApp
            document.getElementById("produk_terpilih").value = produkNama;
            document.getElementById("harga_terpilih").value = hargaProduk;
        }

        // Fungsi untuk mengarahkan ke WhatsApp
        function kirimPesanWA() {
            var nama = document.getElementById("nama").value;
            var nomor = document.getElementById("nomor").value;
            var produk = document.getElementById("produk_terpilih").value;
            var harga = document.getElementById("harga_terpilih").value;
            var layanan = document.getElementById("layanan").value;
            var kartu = document.getElementById("kartu").value;

            if (nama && nomor && produk && harga && layanan && kartu) {
                var pesan = `Saya ingin membeli:\n\nNama: ${nama}\nNomor: ${nomor}\nKartu: ${kartu}\nProduk: ${produk}\nHarga: Rp${harga}\nLayanan: ${layanan}\n\nTerima kasih.`;
                var urlWA = `https://wa.me/6283806195561?text=${encodeURIComponent(pesan)}`; // Ganti nomor WA di sini
                window.location.href = urlWA;
            } else {
                alert("Harap lengkapi semua data!");
            }
        }
    </script>s
    <div class="container">
        <h1>Website Jual Pulsa</h1>
        <form onsubmit="event.preventDefault(); kirimPesanWA();">
            <label for="nama">Nama Pembeli:</label>
            <input type="text" id="nama" name="nama_pembeli" required>

            <label for="nomor">Nomor HP:</label>
            <input type="text" id="nomor" name="nomor_hp" required>

            <label for="kartu">Pilih Kartu:</label>
            <select id="kartu" name="kartu_id" required>
                <option value="">-- Pilih Kartu --</option>
                <option value="Indosat">Indosat</option>
                <option value="Axis">Axis</option>
                <option value="Smartfren">Smartfren</option>
                <option value="By.U">By.U</option>
                <option value="Telkomsel">Telkomsel</option>
                <option value="XL">XL</option>
                <option value="Three">Three</option>
            </select>

            <label for="layanan">Pilih Layanan:</label>
            <select id="layanan" name="layanan_id" required>
                <option value="">-- Pilih Layanan --</option>
                <option value="Top Up Dana">Top Up Dana</option>
                <option value="Token PLN">Token PLN</option>
                <option value="Top Up Game (FF, ML)">Top Up Game (FF, ML)</option>
                <option value="Top Up ShopeePay">Top Up ShopeePay</option>
                <option value="Pulsa Biasa">pulsa biasa</option>
                <option value="pake kouta">pake kouta</option>
                <option value="Paket Telpon & SMS">Paket Telpon & SMS</option>
            </select>

            <label for="produk">Pilih Paket Pulsa:</label>
            <select id="produk" name="produk_id" onchange="updateHarga()" required>
                <option value="">-- Pilih Produk --</option>
                <!-- Indosat -->
                <optgroup label="Indosat">
                    <option value="1" data-harga="11000">2GB 3H = Rp11,000</option>
                    <option value="2" data-harga="12000">2,5GB 3H = Rp12,000</option>
                    <option value="3" data-harga="20000">5GB 5H = Rp20,000</option>
                    <option value="4" data-harga="14000">2,5GB 5H = Rp14,000</option>
                    <option value="5" data-harga="21000">7GB 5H = Rp21,000</option>
                    <option value="6" data-harga="7000">1GB 2H = Rp7,000</option>
                </optgroup>

                <!-- Axis -->
                <optgroup label="Axis">
                    <option value="7" data-harga="7000">1GB 1H = Rp7,000</option>
                    <option value="8" data-harga="13000">2,5GB 3H = Rp13,000</option>
                    <option value="9" data-harga="13000">1,5GB 5H = Rp13,000</option>
                    <option value="10" data-harga="17000">7GB 3H = Rp17,000</option>
                    <option value="11" data-harga="30000">6GB 7H = Rp30,000</option>
                    <option value="12" data-harga="12000">2GB 3H = Rp12,000</option>
                    <option value="13" data-harga="15000">4GB 3H = Rp15,000</option>
                </optgroup>

                <!-- Smartfren -->
                <optgroup label="Smartfren">
                    <option value="14" data-harga="6000">1GB 3H = Rp6,000</option>
                    <option value="15" data-harga="9000">2GB 3H = Rp9,000</option>
                    <option value="16" data-harga="10000">2GB 7H = Rp10,000</option>
                    <option value="17" data-harga="12000">3GB 5H = Rp12,000</option>
                    <option value="18" data-harga="19000">4GB 14H = Rp19,000</option>
                </optgroup>

                <!-- By.U -->
                <optgroup label="By.U">
                    <option value="19" data-harga="5000">1GB 7H = Rp5,000</option>
                    <option value="20" data-harga="10000">2GB 3H = Rp10,000</option>
                    <option value="21" data-harga="12000">3GB 7H = Rp12,000</option>
                    <option value="22" data-harga="12000">2,5GB 5H = Rp12,000</option>
                    <option value="23" data-harga="13000">7GB 7H = Rp13,000</option>
                    <option value="24" data-harga="19000">5GB 7H = Rp19,000</option>
                </optgroup>

                <!-- Telkomsel -->
                <optgroup label="Telkomsel">
                    <option value="25" data-harga="17000">2GB 7H = Rp17,000</option>
                    <option value="26" data-harga="9000">1,5GB 3H = Rp9,000</option>
                    <option value="27" data-harga="12000">2GB 3H = Rp12,000</option>
                    <option value="28" data-harga="13000">2,5GB 5H = Rp13,000</option>
                    <option value="29" data-harga="14000">3GB 3H = Rp14,000</option>
                    <option value="30" data-harga="15000">3GB 5H = Rp15,000</option>
                </optgroup>

                <!-- XL -->
                <optgroup label="XL">
                    <option value="31" data-harga="7000">2GB 2H = Rp7,000</option>
                    <option value="32" data-harga="10000">1,25GB 5H = Rp10,000</option>
                    <option value="33" data-harga="11000">3,6GB 2H = Rp11,000</option>
                    <option value="34" data-harga="15000">2,5GB 5H = Rp15,000</option>
                    <option value="35" data-harga="15000">2GB 8H = Rp15,000</option>
                </optgroup>

                <!-- Three -->
                <optgroup label="Three">
                    <option value="36" data-harga="5000">2GB 1H = Rp5,000</option>
                    <option value="37" data-harga="11000">2GB 7H = Rp11,000</option>
                    <option value="38" data-harga="12000">3GB 2H = Rp12,000</option>
                    <option value="39" data-harga="12000">4GB 3H = Rp12,000</option>
                    <option value="40" data-harga="17000">6,5GB 3H = Rp17,000</option>
                </optgroup>
            </select>

            <div id="harga"></div>

            <input type="hidden" id="produk_terpilih">
            <input type="hidden" id="harga_terpilih">

            <button type="submit">Kirim ke WhatsApp</button>
        </form>
    </div>
</body>
</html>
