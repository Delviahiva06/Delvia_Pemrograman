<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <style>
        body { font-family: 'Poppins', Arial, sans-serif; background: #ede9fe; margin: 0; }
        .container { max-width: 800px; margin: 48px auto; background: #fff; border-radius: 18px; box-shadow: 0 4px 24px #a78bfa33; padding: 40px 32px 36px 32px; }
        h2 { text-align: center; color: #7c3aed; font-size: 2.1em; font-weight: 700; margin-bottom: 32px; letter-spacing: 1px; }
        .btn-group { text-align: center; margin-bottom: 32px; }
        .btn {
            display: inline-block;
            background: linear-gradient(90deg, #a1c4fd 0%, #c2e9fb 100%);
            color: #fff;
            font-weight: 600;
            font-size: 1.15em;
            padding: 16px 38px;
            border-radius: 12px;
            text-decoration: none;
            margin: 0 12px 12px 0;
            border: none;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
            box-shadow: 0 2px 8px #a78bfa22;
        }
        .btn:hover { background: linear-gradient(90deg, #fbc2eb 0%, #a6c1ee 100%); color: #5b21b6; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; font-size: 1.13em; }
        th, td { padding: 16px 10px; text-align: left; }
        th { background: #ede9fe; color: #7c3aed; font-weight: 700; border-bottom: 2.5px solid #a78bfa; }
        tr:nth-child(even) { background: #f5f3ff; }
        td { border-bottom: 1.5px solid #e0e7ff; }
        td .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            font-size: 1.45em;
            margin-right: 10px;
            color: #7c3aed;
            vertical-align: middle;
            transition: color 0.2s;
        }
        td .icon-btn:hover { color: #f59e42; }
        .aksi-col { text-align: center; }
        @media (max-width: 700px) {
            .container { padding: 10px 2vw 30px 2vw; }
            .btn { font-size: 1em; padding: 10px 18px; }
            th, td { padding: 10px 4px; font-size: 1em; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pengguna</h2>
        <div class="btn-group">
            <button class="btn">Tambah pengguna</button>
            <button class="btn">Edit pengguna</button>
            <button class="btn">Ubah password</button>
            <a href="/Tugas_Delvia/CodeIgniter-3.1.13/index.php/Login/logout" class="btn" style="background: #f87171;">Logout</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th style="width:40px;">#</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th class="aksi-col" style="width:120px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($users as $u): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($u->nama) ?></td>
                    <td><?= isset($u->username) ? htmlspecialchars($u->username) : '-' ?></td>
                    <td class="aksi-col">
                        <button class="icon-btn" title="Edit"><span>&#9998;</span></button>
                        <button class="icon-btn" title="Ubah Password"><span>&#128273;</span></button>
                        <button class="icon-btn" title="Hapus"><span>&#128465;</span></button>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html> 