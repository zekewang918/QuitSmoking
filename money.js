function getPricePerCigarette()
{	
	var numberByPack = document.getElementById("number").value;
	var pricePerPack = document.getElementById("price").value;
	
	var pricePerCigarette = pricePerPack/numberByPack;
	
	return pricePerCigarette;
}

function moneyStatus(consumption, usualConsumption)
{	
	var pricePerCigarette = getPricePerCigarette()
	
	moneySpent = totalMoneySpent(consumption, pricePerCigarette);
	moneySaved = totalMoneySaved(consumption, usualConsumption, pricePerCigarette);
	
	//replace everything between the <p ...> </p> tags with the value
	document.getElementById("money_spent").innerHTML = 'You have spent $'+ moneySpent +' since you joined this program.';
	document.getElementById("money_saved").innerHTML = 'You have saved $'+ moneySaved +' since you joined this program.';
}

// both of the function are very basic but this allow to test them very easily
function totalMoneySpent(consumption, pricePerCigarette)
{	
	var total = consumption * pricePerCigarette;
	return parseInt(total);
}

function totalMoneySaved(consumption, usualConsumption, pricePerCigarette)
{	
	var moneySaved = (usualConsumption - consumption) * pricePerCigarette;
	
	if ( moneySaved < 0){
		moneySaved =0;
	}
	
	return parseInt(moneySaved);
}
