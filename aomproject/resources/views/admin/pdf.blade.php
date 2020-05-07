<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student PDF</title>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }
    </style>

</head>


<style>
    body {
        font-family: "THSarabunNew";
    }

    table {
        border-collapse: collapse;
    }

    td,
    th {
        /* border: 1px solid; */
    }
</style>

<body>

    <div align="center">
        <img src="image/mor.png" width="80">
    </div>
    <div align=" center">
        <h3><b>รายชื่อนักศึกษา</b></h3>
    </div>
    <table align="center">
        
        <thead>
            <tr>
                <th width="150">
                    <div align="center">รหัสนักศึกษา</div>
                </th>
                <th width="150">
                    <div align="center">ชื่อ-สกุล</div>
                </th>
                <th width="150">
                    <div align="center">สถานะ</div>
                </th>

            </tr>
        </thead>
        @foreach($users as $gg)
        <tbody>
            <tr>
                <td align="center">
                    {{ $gg->StudentID }}
                </td>
                <td>
                    {{ $gg->name }}
                </td>
                <td align="center">
                    @if( $gg->StudentOldStatus_Id === 4)
                    <font color='#1D8348'>กำลังศึกษา</font>
                    @elseif( $gg->StudentOldStatus_Id === 3)
                    <font color='#D35400'>ย้ายคณะ/ย้ายสาขา</font>
                    @elseif( $gg->StudentOldStatus_Id === 2)
                    <font color='#7D3C98'>พ้นสภาพ</font>
                    @elseif( $gg->StudentOldStatus_Id === 1)
                    <font color='#3498DB'>จบการศึกษา</font>
                    @else
                    <font color='#FF0000'>ไม่พบ</font>
                    @endif


                </td>
            </tr>
        </tbody>
        @endforeach
    </table>

</body>

</html>