function cetak_gambar(num) {
  if (num % 2 == 1) {
  var str = '';
    for (i = 1; i <= num; i++) {
      for (j = 1;j <= num; j++) {        
        if (i % 2 == 1) {
          let c = num / 2
          if (j != parseInt(c) +1) {
            str += '* ';
          } else {
            str += '= ';
          }
        } else {
          if (j % 2 == 1) {
            str += '* ';
          } else {
            str += '= ';
          }
        }
      }
      str += '\n';
    }
  }
  console.log(str)
}
cetak_gambar(5)