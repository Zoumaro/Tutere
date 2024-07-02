<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style type="text/css">
        label{
            display: inline-block;
            width: 200px
        }

        .dev_deg{
            padding-top: 30px;  
        }

        .div_center{
            text-align: center;
            padding-top: 40px   
        }
    </style>
</head>

<body>
    @include('admin.header')
    <!-- Sidebar Navigation-->
    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <div  class="div_center">   

                    <h1 style="font-size: 30px; font-weigh:bold;">Ajout de chambres </h1>

                    <form action="{{url('ajout_chambre')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_deg">
                            <label for="">Chambre Numero </label>
                            <input type="number" name="NoChambre">
                        </div>
                        <div class="div_deg">
                            <label for="">Description</label>
                            <textarea name="Cacteristiqueschambre"></textarea>
                        </div>
                        <div class="div_deg">
                            <label>Statut de chambre</label>
                            <select name="Statutchambre" >
                                <option selected value="1">Disponible</option>
                                <option value="0">Occupé</option>

                            </select>
                        </div>
                        <div class="div_deg">
                            <label>Typechambre</label>
                            <select name="Typechambre" >
                                <option selected value="regulaire">Regulaire</option>
                                <option value="premium">Premium</option>
                                <option value="luxe">Luxe</option>

                            </select>
                        </div>

                        <div class="div_deg">
                            <label >Modifier l'Image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="div_deg">
                            <input class="btn btn-primary" type="submit" value="Ajout de chambre">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('admin.footer')
</body>

</html>
