<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Book</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #ec4899;
            --dark-bg: #0f172a;
            --card-bg: linear-gradient(135deg, #312e81, #1e1b4b);
            --input-bg: #1e293b;
            --text-color: #f1f5f9;
            --border-color: #475569;
            --error: #ef4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--dark-bg);
            color: var(--text-color);
            padding: 40px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: var(--card-bg);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            background: linear-gradient(to right, #a78bfa, #f472b6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }

        input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--border-color);
            border-radius: 10px;
            background: var(--input-bg);
            color: var(--text-color);
            font-size: 16px;
            transition: 0.3s;
        }

        input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 5px var(--primary);
        }

        .error-message {
            color: var(--error);
            font-size: 14px;
            margin-top: 5px;
            display: block;
        }

        .btn {
            width: 100%;
            background: linear-gradient(to right, #3b82f6, #9333ea);
            color: white;
            padding: 14px;
            font-size: 16px;
            font-weight: 500;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(99, 102, 241, 0.6);
            transition: transform 0.2s ease, box-shadow 0.3s ease;
            text-transform: uppercase;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(139, 92, 246, 0.8);
        }

        .form-footer {
            margin-top: 25px;
            text-align: center;
            font-size: 14px;
            color: #94a3b8;
        }

        .action-buttons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .btn-cancel {
            background: linear-gradient(to right, #6b7280, #4b5563);
            box-shadow: 0 0 15px rgba(107, 114, 128, 0.6);
        }

        .btn-cancel:hover {
            box-shadow: 0 0 25px rgba(107, 114, 128, 0.8);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Buku</h1>
        <form action="{{ url('/books/' . $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="title">Judul Buku</label>
                <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" placeholder="Masukkan judul buku">
                @error('title') <small class="error-message">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="author">Penulis</label>
                <input type="text" id="author" name="author" value="{{ old('author', $book->author) }}"
                    placeholder="Masukkan nama penulis">
                @error('author') <small class="error-message">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" value="{{ old('year', $book->year) }}" placeholder="Contoh: 2025"
                    min="1000" max="{{ date('Y') }}">
                @error('year') <small class="error-message">{{ $message }}</small> @enderror
            </div>

            <div class="action-buttons">
                <button type="submit" class="btn">Perbarui Buku</button>
                <a href="{{ url('/books') }}" class="btn btn-cancel">Batal</a>
            </div>
        </form>

        <div class="form-footer">
            <p>Edit informasi buku dan klik Perbarui untuk menyimpan perubahan.</p>
        </div>
    </div>
</body>

</html>