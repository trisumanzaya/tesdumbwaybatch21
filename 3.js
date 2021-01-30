function cetakPola(num) {
    let str = '';
    for (let i = 0; i < 5; i++) {
      str = ''
      for (let n = 0; n < num; n++) {
        for (let j = 0; j < 5; j++) {
          if ((i === 0 || i === 4) && j === 2) {
            str += '*'
          }
          else if ((i === 1 || i === 3) && (j === 1 || j === 3)) {
            str += '*'
          }
          else if (i === 2 && (j === 0 || j === 4)) {
            str += '*'
          } else {
            str += ' '
          }
        }
        str += ' '
      }
      console.log(str);
    }
  }
  
  cetakPola(10)