const students = [
    { name: 'Павел', age: 20 },
    { name: 'Иван', age: 20 },
    { name: 'Эдем', age: 20 },
    { name: 'Денис', age: 20 },
    { name: 'Виктория', age: 20 },
    { age: 40 },
]

function createCounter(students, key)
{
    let arr = [];
    for (let i = 0; i < students.length; i++)
    {
        const obj = students[i];
        if (obj [key] !== undefined)
        {
            arr.push(obj [key]);
        }         
    }
    return arr;
}
const result = createCounter(students, 'name')
console.log(result)





function createCounter() 
{
    let count = 1;

    return function () 
    {
        return count++;
    }
}

const counter1 = createCounter()
console.log(counter1());
console.log(counter1());

const counter2 = createCounter()
console.log(counter2());
console.log(counter2());





function spinWords(string)
{
    let arr = string.split(' ');
    for (let i = 0; i < arr.length; i++)
    {
        if (arr[i].length >=5)
        {
            arr[i] = arr[i].split('').reverse().join('');
        }
    }
    return str = arr.join(' ');
}
const result1 = spinWords( "Привет от Legacy" )
console.log(result1) // тевирП от ycageL

const result2 = spinWords( "This is a test" )
console.log(result2) // This is a test