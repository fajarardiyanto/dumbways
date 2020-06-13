function kata(kataPertama, kataKedua) {
    var str = ""
    for (var i = 0; i < kataPertama.length;i++) {
      str += kataPertama[i]
      str += kataKedua[i]
    }
    console.log(str)
  }
  kata("lesley","karrie")