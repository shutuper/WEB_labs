const arr = [1, 213, 3, 5, 2, 8, 7];

const qsort = (arr) =>{
    if(arr.length < 2)
{
    return arr;
} else{
        const pivot = arr[Math.floor(Math.random() * arr.length)]
    const greater = arr.filter(value => value > pivot);
        return [... qsort(greater),pivot];
}
    console.log(qsort(arr));
}