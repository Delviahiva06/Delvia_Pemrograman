<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <style>
        body { font-family: 'Poppins', Arial, sans-serif; background: #f3e8ff; margin: 0; }
        .container { max-width: 700px; margin: 40px auto; background: #fff; border-radius: 18px; box-shadow: 0 4px 24px #a78bfa33; padding: 36px 28px 32px 28px; }
        h2 { text-align: center; color: #5b21b6; }
        .btn-group { text-align: center; margin-bottom: 24px; }
        .btn {
            display: inline-block;
            background: linear-gradient(90deg, #a1c4fd 0%, #c2e9fb 100%);
            color: #fff;
            font-weight: 600;
            font-size: 1em;
            padding: 10px 24px;
            border-radius: 8px;
            text-decoration: none;
            margin: 0 8px 8px 0;
            border: none;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .btn:hover { background: linear-gradient(90deg, #fbc2eb 0%, #a6c1ee 100%); color: #5b21b6; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 12px 8px; border-bottom: 1px solid #e0e7ff; text-align: left; }
        th { background: #ede9fe; color: #5b21b6; }
        td .icon-btn { background: none; border: none; cursor: pointer; font-size: 1.1em; margin-right: 6px; color: #5b21b6; }
        td .icon-btn:hover { color: #f59e42; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data Pengguna</h2>
        <div class="btn-group">
            <button class="btn">Tambah pengguna</button>
            <button class="btn">Edit pengguna</button>
            <button class="btn">Ubah password</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($users as $u): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($u->nama) ?></td>
                    <td><?= isset($u->username) ? htmlspecialchars($u->username) : '-' ?></td>
                    <td>
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