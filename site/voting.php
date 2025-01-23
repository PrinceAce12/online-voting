<?php $title = "Elections"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/election.css?v=2">
    <script src="script.js" defer></script>
   
</head>
<body>

<?php include 'layout/header.php'; ?>


<div class="container">
    <h1><?php echo $title; ?></h1>
    
    <section class="candidates">
        <h2>Meet the Candidates</h2>
        <ul class="candidates">
            <li>President - Candidate A, Candidate B</li>
            <li>Vice President - Candidate C, Candidate D</li>
            <li>Secretary - Candidate E, Candidate F</li>
            <li>Treasurer - Candidate G, Candidate H</li>
            <li>Auditor - Candidate I, Candidate J</li>
            <li>Public Relations Officer (PRO) - Candidate K, Candidate L</li>
            <li>Sergeant-at-Arms - Candidate M, Candidate N</li>
            <li>Business Manager - Candidate O, Candidate P</li>
            <li>Event Coordinator - Candidate Q, Candidate R</li>
            <li>Grade/Year Level Representatives - Candidate S, Candidate T</li>
        </ul>
    </section>
    
    <section class="vote">
        <h2>Vote Now</h2>
        <form action="submit_vote.php" method="POST">
            <label for="voter_id">Voter ID:</label>
            <input type="text" id="voter_id" name="voter_id" required>
            
            <label for="position">Choose a position:</label>
            <select id="position" name="position" required>
                <option value="president">President</option>
                <option value="vice_president">Vice President</option>
                <option value="secretary">Secretary</option>
                <option value="treasurer">Treasurer</option>
                <option value="auditor">Auditor</option>
                <option value="pro">Public Relations Officer (PRO)</option>
                <option value="sergeant">Sergeant-at-Arms</option>
                <option value="business_manager">Business Manager</option>
                <option value="event_coordinator">Event Coordinator</option>
                <option value="year_representative">Grade/Year Level Representatives</option>
            </select>
            
            <label for="candidate">Choose a candidate:</label>
            <select id="candidate" name="candidate" required>
                <option value="candidate_a">Candidate A</option>
                <option value="candidate_b">Candidate B</option>
                <option value="candidate_c">Candidate C</option>
                <option value="candidate_d">Candidate D</option>
                <option value="candidate_e">Candidate E</option>
                <option value="candidate_f">Candidate F</option>
                <option value="candidate_g">Candidate G</option>
                <option value="candidate_h">Candidate H</option>
                <option value="candidate_i">Candidate I</option>
                <option value="candidate_j">Candidate J</option>
                <option value="candidate_k">Candidate K</option>
                <option value="candidate_l">Candidate L</option>
                <option value="candidate_m">Candidate M</option>
                <option value="candidate_n">Candidate N</option>
                <option value="candidate_o">Candidate O</option>
                <option value="candidate_p">Candidate P</option>
                <option value="candidate_q">Candidate Q</option>
                <option value="candidate_r">Candidate R</option>
                <option value="candidate_s">Candidate S</option>
                <option value="candidate_t">Candidate T</option>
            </select>
            
            <input type="submit" name="submit">Submit Vote</button>
        </form>
    </section>
    
    <section class="results">
        <h2>Election Results</h2>
        <div id="results-container">
            <!-- Results will be dynamically loaded here via script.js -->
        </div>
    </section>
</div>

<?php include 'layout/footer.php'; ?>

</body>
</html>
