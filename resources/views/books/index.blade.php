<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku - Perpustakaan Digital</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        :root {
            --primary: #8a5cf6;
            --primary-light: #9d79f8;
            --secondary: #2a2a3a;
            --dark: #1a1a2e;
            --darker: #12121a;
            --light: #f0e6ff;
            --accent: #ff7e5f;
            --text: #e0e0e0;
            --text-light: #a0a0c0;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--darker);
            color: var(--text);
            line-height: 1.7;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        header {
            background: linear-gradient(135deg, var(--secondary), var(--dark));
            padding: 25px 0;
            margin-bottom: 40px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.3);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            color: var(--light);
            font-weight: 600;
            font-size: 32px;
            letter-spacing: 0.5px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 24px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 15px;
            box-shadow: 0 4px 15px rgba(138, 92, 246, 0.3);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(138, 92, 246, 0.4);
            background: linear-gradient(135deg, var(--primary-light), var(--primary));
        }

        .btn i {
            margin-right: 10px;
            font-size: 16px;
        }

        .card {
            background: linear-gradient(145deg, var(--secondary), var(--dark));
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            padding: 30px;
            margin-bottom: 40px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .table-responsive {
            overflow-x: auto;
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 18px 20px;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        th {
            background: linear-gradient(to right, var(--dark), var(--secondary));
            color: var(--light);
            font-weight: 600;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
            position: sticky;
            top: 0;
        }

        tr:not(:last-child) {
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }

        tr:hover {
            background: rgba(138, 92, 246, 0.05);
        }

        .book-title {
            font-weight: 500;
            color: var(--light);
            font-size: 16px;
        }

        .book-author {
            color: var(--text-light);
            font-weight: 400;
        }

        .book-year {
            font-weight: 500;
            color: var(--primary-light);
        }

        .action-buttons {
            display: flex;
            gap: 12px;
        }

        .btn-edit {
            background: linear-gradient(135deg, #4cc9f0, #4895ef);
            box-shadow: 0 4px 15px rgba(76, 201, 240, 0.3);
        }

        .btn-edit:hover {
            background: linear-gradient(135deg, #4895ef, #4cc9f0);
            box-shadow: 0 6px 20px rgba(76, 201, 240, 0.4);
        }

        .btn-delete {
            background: linear-gradient(135deg, #f72585, #b5179e);
            box-shadow: 0 4px 15px rgba(247, 37, 133, 0.3);
        }

        .btn-delete:hover {
            background: linear-gradient(135deg, #b5179e, #f72585);
            box-shadow: 0 6px 20px rgba(247, 37, 133, 0.4);
        }

        .empty-state {
            text-align: center;
            padding: 60px 0;
            color: var(--text-light);
        }

        .empty-state i {
            font-size: 70px;
            margin-bottom: 25px;
            color: rgba(138, 92, 246, 0.2);
        }

        .empty-state h3 {
            font-family: 'Playfair Display', serif;
            font-size: 24px;
            margin-bottom: 15px;
            color: var(--light);
        }

        .empty-state p {
            max-width: 400px;
            margin: 0 auto;
            font-size: 15px;
        }

        footer {
            text-align: center;
            padding: 30px 0;
            color: var(--text-light);
            font-size: 14px;
            margin-top: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Glow effect for cards */
        .card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            background: linear-gradient(45deg, var(--primary), var(--accent), var(--primary));
            z-index: -1;
            border-radius: 14px;
            opacity: 0.1;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }

            th,
            td {
                padding: 14px 12px;
                font-size: 14px;
            }

            .btn {
                padding: 10px 18px;
                font-size: 14px;
            }

            .action-buttons {
                flex-direction: column;
                gap: 8px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container header-content">
            <h1><i class="fas fa-book-open"></i> Daftar Buku</h1>
            <a href="{{ url('/books/create') }}" class="btn">
                <i class="fas fa-plus"></i> Tambah Buku
            </a>
        </div>
    </header>

    <main class="container">
        <div class="card">
            <div class="table-responsive">
                @if(count($books) > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>Judul Buku</th>
                                <th>Penulis</th>
                                <th>Tahun Terbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td class="book-title">{{ $book->title }}</td>
                                    <td class="book-author">{{ $book->author }}</td>
                                    <td class="book-year">{{ $book->year }}</td>
                                    <td class="action-buttons">
                                        <a href="{{ url('/books/' . $book->id . '/edit') }}" class="btn btn-edit">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ url('/books/' . $book->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-delete"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                                                <i class="fas fa-trash"></i> Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="empty-state">
                        <i class="fas fa-book"></i>
                        <h3>Belum Ada Buku</h3>
                        <p>Tambahkan buku pertama Anda dengan mengklik tombol "Tambah Buku" di atas</p>
                    </div>
                @endif
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2023 Perpustakaan Digital. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Add subtle animation to cards on load
        document.addEventListener('DOMContentLoaded', () => {
            const card = document.querySelector('.card');
            if (card) {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'all 0.6s ease-out';

                setTimeout(() => {
                    card.style.opacity = 1;
                    card.style.transform = 'translateY(0)';
                }, 100);
            }
        });
    </script>
</body>

</html>