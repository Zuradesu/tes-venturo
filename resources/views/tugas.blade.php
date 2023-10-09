<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Halaman Tugas</title>
</head>
<body>
    <h1>Ini Halaman Sesuai Tugas</h1>
    <br>
    <a href="/home" rel="Array Transaksi" class="btn btn-secondary">
        Halaman Home
    </a>
    <br>

    <div class="container-fluid">
        <div class="card" style="margin: 2rem 0rem;">
            <div class="card-header">
                Venturo - Laporan penjualan tahunan per menu
            </div>
            <div class="card-body">
                <form action="" method="get">
                    <div class="row">
                        <div class="col-2">
                            <div class="form-group">
                                
                                <select id="my-select" class="form-control" name="tahun">
                                    <option value="2021" @if(request('tahun') == '2021') selected @endif>2021</option>
                                    <option value="2022" @if(request('tahun') == '2022') selected @endif>2022</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary">
                                Tampilkan
                            </button>
                            <a href="http://tes-web.landa.id/intermediate/menu" target="_blank" rel="Array Menu" class="btn btn-secondary">
                                Json Menu
                            </a>
                            <a href="http://tes-web.landa.id/intermediate/transaksi?tahun=2021" target="_blank" rel="Array Transaksi" class="btn btn-secondary">
                                Json Transaksi
                            </a>                           
                        </div>
                    </div>
                </form>
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" style="margin: 0;">
                        <thead>
                            <tr class="table-dark">
                                <th rowspan="2" style="text-align:center;vertical-align: middle;width: 250px;">Menu</th>
                                <th colspan="12" style="text-align: center;">Periode Pada 2021
                                </th>
                                <th rowspan="2" style="text-align:center;vertical-align: middle;width:75px">Total</th>
                            </tr>
                            <tr class="table-dark">
                                <th style="text-align: center;width: 75px;">Jan</th>
                                <th style="text-align: center;width: 75px;">Feb</th>
                                <th style="text-align: center;width: 75px;">Mar</th>
                                <th style="text-align: center;width: 75px;">Apr</th>
                                <th style="text-align: center;width: 75px;">Mei</th>
                                <th style="text-align: center;width: 75px;">Jun</th>
                                <th style="text-align: center;width: 75px;">Jul</th>
                                <th style="text-align: center;width: 75px;">Ags</th>
                                <th style="text-align: center;width: 75px;">Sep</th>
                                <th style="text-align: center;width: 75px;">Okt</th>
                                <th style="text-align: center;width: 75px;">Nov</th>
                                <th style="text-align: center;width: 75px;">Des</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-secondary" colspan="14"><b>Makanan</b></td>
                            </tr>
                        <tbody>
                            @foreach($datamakanan as $item)
                            <tr>
                                <td>{{ $item['menu'] }}</td>
                            </tr>
                            @endforeach

                                <tbody>
                                    <tr>
                                        <td class="table-secondary" colspan="14"><b>Minuman</b></td>
                                    </tr>
                                    {{-- @foreach($dataminuman as $item)
                                    <tr>
                                        <td>{{ $item['menu'] }}</td>
                                    </tr>
                                    @endforeach --}}

                                    
                                </tbody>

                           

                        
                    </table>
                </div>
            </div>
            <?php if(isset($menu)){?>
                
            <div class="row m-3">
                <div class="col-6"><h4>Isi Json Menu</h4><pre style="height: 400px; background:#eaeaea;"><?php var_dump($menu) ?></pre></div>
                <div class="col-6"><h4>Isi Json Transaksi</h4><pre style="height: 400px; background:#eaeaea;"><?php var_dump($transaksi) ?></pre></div>
            </div>
            <?php }?>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    
</body>
</html>