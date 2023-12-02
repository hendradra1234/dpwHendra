<!DOCTYPE html>
<html>
    <header>
        <title>CRUD DB</title>
    </header>
    <!-- <body>
        <div>

        </div>
    </body> -->
    <form method = "POST" action = "">
        <table border = 0>
            <tr>
                <td>NIM</td>
                <td><input type = "text" placeholder = "NIM" name = "NIM" id = "nim"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type = "text" placeholder = "Nama Lengkap" name = "nm_lengkap" id = "nm_lengkap"></td>
            </tr>
            <tr>
                <td>TTL</td>
                <td><input type = "date" placeholder = "Tanggal Lahir" name = "ttl" id = "ttl"></td>
            </tr>
            <tr>
                <td>Pilih Jenis Kelamin</td>
                <td>
                    <select name = "jk" id = "jk">
                        <option value = "Laki-Laki">Laki-Laki</option>
                        <option value = "Perempuan">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><input type = "submit" placeholder = "Jurusan" name = "jurusan" id = "jurusan"></td>
            </tr>
        </table>
    </form>
</html>