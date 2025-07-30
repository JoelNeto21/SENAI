// laços de repetição

// --------------------FOR------------------------

/* 
    for (inicialização; condição; incremento) {
        bloco de código
    }
*/


for (let i = 30; i < 20; i++) {
    console.log(i);
} 


for (let i = 20; i >= 10; i--) {
    console.log(i);
}


for (let i = 0; i <= 100; i += 10) {
    console.log(i);
}


// --------------------WHILE------------------------

/* 
    while (condição) {
        bloco de código
    }
*/

let i = 9;
while (i < 10) {
    console.log(i);
    i++;
}

let j = 10;
while (j > 0) {
    console.log(j);
    j--;
}

let k = 0;
while (k <= 100) {
    console.log(k);
    k += 10;
}


// --------------------DO WHILE------------------------

/*
    do {
        bloco de código
    } while (condição)
*/

let l = 5;
let m = 10;
do {
    console.log("l:" + l);
    l++;
    console.log("m:" + m);
    m++;
} while (l < 10 && m < 15);


// break

for (let i = 0; i < 10; i++) {
    if (i === 5) {
        break;
    }
    console.log(i);
}

// continue

for (let i = 0; i < 10; i++) {
    if (i === 5) {
        continue;
    }
    console.log(i);
}


