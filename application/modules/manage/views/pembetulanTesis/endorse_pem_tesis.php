<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endorsement Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }

        .container {
            max-width: 800px;
            margin: auto;
            border: 1px solid #000;
            padding: 20px;
        }

        .header {
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .section-title {
            font-weight: bold;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table td {
            vertical-align: top;
            padding: 5px;
        }

        .checkbox-cell {
            text-align: center;
        }

        .footer {
            margin-top: 20px;
        }

        textarea {
            width: 100%;
            height: 100px;
            border: 1px solid #000;
            padding: 5px;
            resize: none;
        }

        .submit-btn {
            display: block;
            width: 100%;
            max-width: 200px;
            margin: 20px auto 0;
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: center;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="header">
           
            <p>PENGESAHAN OLEH WAKIL JAWATANKUASA PEMERIKSAAN TESIS</p>
            <p>ENDORSEMENT BY REPRESENTATIVE OF THESIS EXAMINATION COMMITTEE</p>
        </div>

      

        <p>
            Dengan ini saya mengesahkan bahawa pelajar di atas telah membuat semua pembetulan seperti yang
            dikemukakan dalam Laporan Pengerusi Jawatankuasa Pemeriksaan Tesis.<br>
            <i>I hereby declare that the above student has completed all correction(s) based on a report by the Chairman of Thesis Examination Committee.</i>
        </p>

        <table>
            <tr>
                <td class="checkbox-cell">
                    <input type="checkbox">
                </td>
                <td>bersetuju<br><i>I agree</i></td>
            </tr>
        </table>

        <div class="footer">
            <p>Ulasan-ulasan lain (jika ada):<br><i>Other comment(s), (if any):</i></p>
            <textarea></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit-btn">Submit</button>
    </div>
</body>
</html>
