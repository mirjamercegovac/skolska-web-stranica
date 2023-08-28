<?php
    $conn = mysqli_connect("localhost", "root", "", "logindb");


    if (isset($_POST['annaL']))
    {
        $vote_annaL = "update vote set annaL=annaL+1";
        $run_annaL = mysqli_query($conn, $vote_annaL);
 
        if($run_annaL){
            echo "<h2>Vote for Anna from Ljudi!</h2>";
        }
    }

    if (isset($_POST['johnL']))
    {
        $vote_johnL = "update vote set johnL=johnL+1";
        $run_johnL = mysqli_query($conn, $vote_johnL);

        if($run_johnL){
            echo "<h2>Vote for John from Ljudi!</h2>";
        }
    }

    if (isset($_POST['meiL']))
    {
        $vote_meiL = "update vote set meiL=meiL+1";
        $run_meiL = mysqli_query($conn, $vote_meiL);

        if($run_meiL){
            echo "<h2>Vote for Mei from Ljudi!</h2>";
        }
    }

    if (isset($_POST['soL']))
    {
        $vote_soL = "update vote set soL=soL+1";
        $run_soL = mysqli_query($conn, $vote_soL);

        if($run_soL){
            echo "<h2>Vote for So from Ljudi!</h2>";
        }
    }

    if (isset($_POST['jenL']))
    {
        $vote_jenL = "update vote set jenL=jenL+1";
        $run_jenL = mysqli_query($conn, $vote_jenL);

        if($run_jenL){
            echo "<h2>Vote for Jen from Ljudi!</h2>";
        }
    }

    if (isset($_POST['filipML']))
    {
        $vote_filipML = "update vote set filipML=filipML+1";
        $run_filipML = mysqli_query($conn, $vote_filipML);

        if($run_filipML){
            echo "<h2>Vote for Filip from Meta ljudi!</h2>";
        }
    }

    if (isset($_POST['steveML']))
    {
        $vote_steveML = "update vote set steveML=steveML+1";
        $run_steveML = mysqli_query($conn, $vote_steveML);

        if($run_steveML){
            echo "<h2>Vote for Steve from Meta ljudi!</h2>";
        }
    }

    if (isset($_POST['leeaML']))
    {
        $vote_leeaML = "update vote set leeaML=leeaML+1";
        $run_leeaML = mysqli_query($conn, $vote_leeaML);

        if($run_leeaML){
            echo "<h2>Vote for Leea from Meta ljudi!</h2>";
        }
    }

    if (isset($_POST['saraML']))
    {
        $vote_saraML = "update vote set saraML=saraML+1";
        $run_saraML = mysqli_query($conn, $vote_saraML);

        if($run_saraML){
            echo "<h2>Vote for Sara from Meta ljudi!</h2>";
        }
    }

    if (isset($_POST['sindiML']))
    {
        $vote_sindiML = "update vote set sindiML=sindiML+1";
        $run_sindiML = mysqli_query($conn, $vote_sindiML);

        if($run_sindiML){
            echo "<h2>Vote for Sindi from Meta ljudi!</h2>";
        }
    }

    if (isset($_POST['ellaH']))
    {
        $vote_ellaH = "update vote set ellaH=ellaH+1";
        $run_ellaH = mysqli_query($conn, $vote_ellaH);

        if($run_ellaH){
            echo "<h2>Vote for Ella from Ljudi!</h2>";
        }
    }

    if (isset($_POST['chloeH']))
    {
        $vote_chloeH = "update vote set chloeH=chloeH+1";
        $run_chloeH = mysqli_query($conn, $vote_chloeH);

        if($run_chloeH){
            echo "<h2>Vote for Chloe from Ljudi!</h2>";
        }
    }

    if (isset($_POST['daniH']))
    {
        $vote_daniH = "update vote set daniH=daniH+1";
        $run_daniH = mysqli_query($conn, $vote_daniH);

        if($run_daniH){
            echo "<h2>Vote for Dani from Ljudi!</h2>";
        }
    }

    if (isset($_POST['joeH']))
    {
        $vote_joeH = "update vote set joeH=joeH+1";
        $run_joeH = mysqli_query($conn, $vote_joeH);

        if($run_joeH){
            echo "<h2>Vote for Joe from Ljudi!</h2>";
        }
    }

    if (isset($_POST['johnyH']))
    {
        $vote_johnyH = "update vote set johnyH=johnyH+1";
        $run_johnyH = mysqli_query($conn, $vote_johnyH);

        if($run_johnyH){
            echo "<h2>Vote for Johny from Ljudi!</h2>";
        }
    }

    if (isset($_POST['samN']))
    {
        $vote_samN = "update vote set samN=samN+1";
        $run_samN= mysqli_query($conn, $vote_samN);

        if($run_samN){
            echo "<h2>Vote for Sam from Ljudi!</h2>";
        }
    }

    if (isset($_POST['suzziN']))
    {
        $vote_suzziN = "update vote set suzziN=suzziN+1";
        $run_suzziN = mysqli_query($conn, $vote_suzziN);

        if($run_suzziN){
            echo "<h2>Vote for Suzzi from Ljudi!</h2>";
        }
    }

    if (isset($_POST['kiraN']))
    {
        $vote_kiraN = "update vote set kiraN=kiraN+1";
        $run_kiraN = mysqli_query($conn, $vote_kiraN);

        if($run_kiraN){
            echo "<h2>Vote for Kira from Ljudi!</h2>";
        }
    }

    if (isset($_POST['markusN']))
    {
        $vote_markusN = "update vote set markusN=markusN+1";
        $run_markusN = mysqli_query($conn, $vote_markusN);

        if($run_markusN){
            echo "<h2>Vote for Markus from Ljudi!</h2>";
        }
    }

    if (isset($_POST['noelN']))
    {
        $vote_noelN = "update vote set noelN=noelN+1";
        $run_noelN = mysqli_query($conn, $vote_noelN);

        if($run_noelN){
            echo "<h2>Vote for Noel from Ljudi!</h2>";
        }
    }
    if (isset($_POST['result']))
    {
        $query = "SELECT * FROM vote";

        $result = mysqli_query($conn, $query);

        if($result){
            echo "<h2 style='margin-left: 6rem; margin-bottom: 4rem;'><a href='admin_page.php?results'>View results</a></h2>";
        }
    }

    if(isset($_GET['results'])){
        $get_votes="select * from vote";
        $run_votes=mysqli_query($conn, $get_votes);
        $row_votes=mysqli_fetch_array($run_votes);

            $annaL=$row_votes['annaL'];
            $johnL=$row_votes['johnL'];
            $meiL=$row_votes['meiL'];
            $soL=$row_votes['soL'];
            $jenL=$row_votes['jenL'];
            $filipML=$row_votes['filipML'];
            $steveML=$row_votes['steveML'];
            $leeaML=$row_votes['leeaML'];
            $saraML=$row_votes['saraML'];
            $sindiML=$row_votes['sindiML'];
            $ellaH=$row_votes['ellaH'];
            $chloeH=$row_votes['chloeH'];
            $daniH=$row_votes['daniH'];
            $joeH=$row_votes['joeH'];
            $johnyH=$row_votes['johnyH'];
            $samN=$row_votes['samN'];
            $suzziN=$row_votes['suzziN'];
            $kiraN=$row_votes['kiraN'];
            $markusN=$row_votes['markusN'];
            $noelN=$row_votes['noelN'];

        echo "<h2 style='font-size: 2rem; margin-left: 6rem;'>Rezultati:</h2>
            <div style='display: grid;
            grid-template-columns: repeat(auto-fit, minmax(20rem, 1fr));
            gap: 1rem; margin-bottom: 6rem; margin-left: 6rem; margin-right: 6rem;'>
                
                <div style='font-size: 1.5rem; padding: 2rem 1rem;
                text-align: center;
                border: 2px solid rgb(1, 217, 255);
                background: rgb(202, 243, 255); border-radius:20px;'>
                    <h3 style='padding-bottom: 1.5rem;'>LJUDI</h3>
                    <p><b>Anna: </b> $annaL</p>
                    <p><b>John: </b> $johnL</p>
                    <p><b>Mei: </b> $meiL</p>
                    <p><b>So: </b> $soL</p>
                    <p><b>Jen: </b> $jenL</p>
                </div>
                
                <div style='font-size: 1.5rem;padding: 2rem 1rem;
                text-align: center;
                border: 2px solid rgb(1, 217, 255);
                background: rgb(202, 243, 255); border-radius:20px;'>
                    <h3 style='padding-bottom: 1.5rem;'>META LJUDI</h3>
                    <p><b>Filip: </b> $filipML</p>
                    <p><b>Steve: </b> $steveML</p>
                    <p><b>Leea: </b> $leeaML</p>
                    <p><b>Sara: </b> $saraML</p>
                    <p><b>Sindi: </b> $sindiML</p>
                </div>
                
                <div style='font-size: 1.5rem;padding: 2rem 1rem;
                text-align: center;
                border: 2px solid rgb(1, 217, 255);
                background: rgb(202, 243, 255); border-radius:20px;'>
                    <h3 style='padding-bottom: 1.5rem;'>HEROJI</h3>
                    <p><b>Ella: </b> $ellaH</p>
                    <p><b>Chloe: </b> $chloeH</p>
                    <p><b>Dani: </b> $daniH</p>
                    <p><b>Joe: </b> $joeH</p>
                    <p><b>Johny: </b> $johnyH</p>
                </div>
                
                <div style='font-size: 1.5rem;padding: 2rem 1rem;
                text-align: center;
                border: 2px solid rgb(1, 217, 255);
                background: rgb(202, 243, 255); border-radius:20px;'>
                    <h3 style='padding-bottom: 1.5rem;'>NADNARAVNO</h3>
                    <p><b>Sam: </b> $samN</p>
                    <p><b>Suzzi: </b> $suzziN</p>
                    <p><b>Kira: </b> $kiraN</p>
                    <p><b>Markus: </b> $markusN</p>
                    <p><b>Noel: </b> $noelN</p>
                </div>
                
            </div>
        ";

    }


?>