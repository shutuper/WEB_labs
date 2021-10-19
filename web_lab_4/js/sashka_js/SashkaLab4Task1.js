const arrIn = [1, 2, 3, 4, 5, 6, 12, 9];
var arr2 = [];
var arr6 = [];
var arr3= [];

arrIn.forEach(function(item, i, arr) {
    if((item%2) === 0){
        arr2.push(item);
    }
    if((item%6) === 0){
        arr6.push(item);
    }
    if((item%3) === 0){
        arr3.push(item);
    }
});

const arrOut = arr2.concat(arr6, arr3);
console.log(arrIn);
console.log(arrOut);

function quickSort(arr) {
    if (arr.length < 2) return arr;
    let pivot = arr[0];
    const left = [];
    const right = [];

    for (let i = 1; i < arr.length; i++) {
        if (pivot > arr[i]) {
            left.push(arr[i]);
        } else {
            right.push(arr[i]);
        }
    }
    return quickSort(left).concat(pivot, quickSort(right));
}

document.write("<p style='color: #7e0084'>Вхідний масив:</p>");
document.write(arrIn);
document.write("<p style='color: #7e0084'> Вихідний масив: </p>");
document.write(arrOut);
document.write("<p style='color: #7e0084'>Відсортований масив (Quicksort): </p>");
document.write(quickSort(arrOut));

