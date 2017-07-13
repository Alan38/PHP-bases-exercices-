<!DOCTYPE html>
<html>
    
    <head>
        
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    
    <body>
        <table>
            <tr>
                <th><strong>Prénom</strong></th>
                <th><strong>Taille</strong></th>
                <th><strong>Poids</strong></th>   
            </tr>
            <tr>
                <td>Medhi</td>
                <td>1m68</td>
                <td>55kg</td>
            </tr>
            <tr>
                <td>Mourad</td>
                <td>1m78</td>
                <td>72kg</td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>1m70</td>
                <td>60kg</td>
            </tr>
        </table>
        
        <br><br>
        
        <table>
            <tr>
                <td>Medhi</td>
                <td>1m68</td>
                <td>55kg</td>
                <td>Boxe Française</td>
            </tr>
            <tr>
                <td>Mourad</td>
                <td>1m78</td>
                <td>72kg</td>
                <td>Boxe Thai</td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>1m70</td>
                <td>60kg</td>
                <td>Boxe Mongolienne</td>
            </tr>
            <tr>
                <td colspan="4">Poids Plume</td>
            </tr>
        </table>
        
        <br><br>
        
        <table>
            <tr>
                <td>Medhi</td>
                <td>1m68</td>
                <td>55kg</td>
                <td rowspan="4">Boxe</td>
            </tr>
            <tr>
                <td>Mourad</td>
                <td>1m78</td>
                <td>72kg</td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>1m70</td>
                <td>60kg</td>  
            </tr>
            <tr>
                <td>Fred</td>
                <td>1m82</td>
                <td>70kg</td>
            </tr>
        </table>
        
        <br><br>
        
        <table>
            <tr>
                <td>Medhi</td>
                <td>1m68</td>
                <td rowspan="2" colspan="2">Boxe Mongolienne</td>
            </tr>
            <tr>
                <td>Alan</td>
                <td>1m70</td>
            </tr>
            <tr>
                <td>Mourad</td>
                <td>1m78</td>
                <td rowspan="2" colspan="2">Boxe Yogatienne</td>
            </tr>
            <tr>
                <td>Fred</td>
                <td>1m82</td>
            </tr>
        </table>
        
        <br><br>
        
        <table>
            <caption>Oh le joli tableau</caption>
            <tr>
                <th>W</th>
                <th>X</th>
                <th>Y</th>
                <th>Z</th>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td colspan="2">X</td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td colspan="2">X</td>
            </tr>
            <tr>
                <td rowspan="2">A</td>
                <td>X</td>
                <td colspan="2">X</td>
            </tr>
            <tr>
                <td rowspan="2">C</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td rowspan="3">B</td>
                <td colspan="2">D</td>
            </tr>
            <tr>
                <td>1</td>
                <td colspan="2" rowspan="2">E</td>
            </tr>
            <tr>
                <td>1</td>
            </tr>
        </table>
        
        <br><br>
        
        <?php
            
            echo '<table>';
            
        
            for ($x = 1; $x < 4; $x++) {
                echo '<tr>';
                    
                for ($y = 1; $y < 5; $y++) {
                    echo '<td>1</td>';
                }
                
                echo'</tr>';
            }
        
            echo'</table>';
            
            
        
        ?>
    
    </body>
    
</html>