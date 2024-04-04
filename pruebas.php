<div class="row">
    <div class="col">
        <table class="table">
            <thead>
                <tr>
                    <th>Artista</th>
                    <th>Info</th>
                    <th>Imagen</th>
                    <th>Album</th>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                    for ($r=0; $r < count($personas); $r++){
                        echo '<tr>';
                        foreach ($personas[$r] as $llave => $columna) {
                            switch ($llave) {
                                case 'artista':
                                    echo '<td> <h2>'.$columna.'</h2> </td>';
                                    break;
                                case 'Info':
                                    echo '<td> <p>'.$columna.'</p> </td>';
                                    break;
                                case 'album_mainstream':
                                    echo '<td> <h2>'.$columna.'</h2> </td>';
                                    break;
                                case 'imagen':
                                    echo '<td>'.'<img src="'.$columna.'"class= "d-block w-100" alt="a">'.'</td>';
                                    break;
                                default:
                                    echo '<td> <p>Algo salio mal...</p> </td>';
                                    break;
                            }
                        }
                        echo '</tr>';
                    }    
                ?> 
            </tbody>
        </table>
    </div>
</div> 