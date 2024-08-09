function nextEdge(side1, side2) {
  if (side1 && side2) {
    return side1 % side2;
  }
}

console.log(nextEdge(1, 3));
console.log(nextEdge(3, 4));
console.log(nextEdge(-9, 45));
console.log(nextEdge(5, 5));
