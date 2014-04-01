function getValues(consumption)
{	
	var numberByPack = document.getElementById("number").value;
	var pricePerPack = document.getElementById("price").value;
	
	moneySpent = totalMoneySpent(consumption, pricePerPack, numberByPack);
	
	//replace everything between the <p ...> </p> tags with the value
	document.getElementById("money_spent").innerHTML = 'You have spent $'+ moneySpent +' since you joined this program.';
}

function totalMoneySpent(consumption, pricePerPack, numberByPack)
{	
	var pricePerCigarette = pricePerPack/numberByPack;
	var total = consumption * pricePerCigarette;
	
	return parseInt(total);
}
