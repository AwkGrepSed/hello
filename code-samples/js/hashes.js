
function hash(s)
{
  hash = 7;
  letters = "acdfgilmnoprstuw";
  for(i = 0; i < s.length; i++)
  {
    hash = (hash * 23 + letters.indexOf(s[i]));
    //console.log(hash);
  }
  return hash;
}
console.log("hash the word tortilla");
console.log(hash("tortilla"))



function unhash(n)
{
  result = "";
  letters = "acdfgilmnoprstuw";
  while (n > 7)
  {
    result = letters.charAt((n % 23)) + result;
    n = Math.floor(n / 23);
    //console.log(n, result);
  }
  if (n != 7) { console.log("Error: parity incorrect"); }
  console.log(n);
  return result;
}

console.log("unhash the word tortilla");
console.log(unhash(593846452632))


console.log(unhash(292681030017238))
