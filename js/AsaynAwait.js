

console.log(f());

async function f() {

  const promise = new Promise((resolve, reject) => {
    setTimeout(() => resolve("done!"), 1000)
  });

  console.log("1");
  // const result = promise;
  const result = await promise; // promise が解決するまで待ちます (*)
  console.log("2");
  console.log(result); // "done!"
  console.log("3");
}
