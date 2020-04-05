<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow">
<meta name="viewport" content="width=device-width, initial-scale =1.0, user-scalable =no">

<link href='https://betterproposals.io/proposal/custom.css' rel='stylesheet' type='text/css'>

<title>Proposal Cover</title>
</head>

<body>

<?php if (isset($_GET['ContactID'])) { ?>
<iframe id="iframe1" frameborder="0" src="https://betterproposals.io/proposal/cover.php?ProposalID=<?php echo $_GET['ProposalID'];?>&ContactID=<?php echo $_GET['ContactID'];?>"></iframe> 
<?php } else {?>
<iframe id="iframe1" frameborder="0" src="https://betterproposals.io/proposal/cover.php?ProposalID=<?php echo $_GET['ProposalID'];?>&debug=yes"></iframe> 
<?php } ?>

</body>
</html>
