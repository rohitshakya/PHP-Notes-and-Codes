var BackInicial = "";
var TransInicial = "";
var FillInicial = "";
var cvFill = document.createElement('canvas');
var cvBack = document.createElement('canvas');
var cvTrans = document.createElement('canvas');
var cvDeta = document.createElement('canvas');
var cvSave = document.createElement('canvas');
var contextFill = cvFill.getContext('2d');
var contextTrans = cvTrans.getContext('2d');
var contextDeta = cvDeta.getContext('2d');
var contextBack = cvBack.getContext('2d');
var div = null;
var btnColores = document.getElementById("btnColores");
var btnBote = document.getElementById("btnBote");
var btnPincel = document.getElementById("btnPincel");
var btnBorrar = document.getElementById("btnBorrar");
var btnFondos = document.getElementById("btnFondos");
var btnTampones = document.getElementById("btnTampones");
var btnCompartir = document.getElementById("btnCompartir");
var painterColors = document.getElementById("painter-colors");
var painterFondos = document.getElementById("painter-fondos");
var painterTampones = document.getElementById("painter-tampones");
var painterPinceles = document.getElementById("painter-pinceles");
var herramienta = "pincel";
var HaPintado = false;
var lc = "round";
var lj = "round";
var activeBox = "";
var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    ancho = w.innerWidth || e.clientWidth || g.clientWidth,
    alto = w.innerHeight || e.clientHeight || g.clientHeight;
var cursor = document.createElement('canvas'),
    contextCursor = cursor.getContext('2d');
cursor.style.position = "absolute";
cursor.style.top = "0";
cursor.style.left = "0";

function makeCursor(color) {
    var altoCursor = "";
    var anchoCursor = "";
    var altoCuadrado = "";
    var anchoCuadrado = "";
    var imgCursor = "";
    cvDeta.style.cursor = 'auto';
    switch (herramienta) {
        case "pincel":
            imgCursor = "data:image/png;base64,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";
            cursor.width = 52;
            cursor.height = 58;
            cursor.style.zIndex = 999999999999999;
            contextCursor.fillStyle = color;
            contextCursor.fillRect(0, 48, 10, 10);
            var img333 = new Image;
            img333.crossOrigin = "anonymous";
            img333.src = imgCursor;
            img333.onload = function() {
                contextCursor.drawImage(img333, 0, 0, 52, 58);
                cvDeta.style.cursor = 'url("' + cursor.toDataURL('image/png', 1) + '") 0 57, auto';
            };
            break;
        case "fill":
            imgCursor = "data:image/png;base64,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";
            
            cursor.width = 52;
            cursor.height = 58;
            cursor.style.zIndex = 999999999999999;
            contextCursor.fillStyle = color;
            contextCursor.fillRect(25, 35, 15, 15);
            var img333 = new Image;
            img333.crossOrigin = "anonymous";
            img333.src = imgCursor;
            img333.onload = function() {
                contextCursor.drawImage(img333, 0, 0, 52, 58);
                cvDeta.style.cursor = 'url(' + cursor.toDataURL() + ') 0 57, auto';
            };
            break;
        case "goma":
            altoCursor = 62;
            anchoCursor = 33;
            imgCursor = "data:image/png;base64,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";
            cursor.width = 52;
            cursor.height = 58;
            cursor.style.zIndex = 999999999999999;
            var img333 = new Image;
            img333.crossOrigin = "anonymous";
            img333.src = imgCursor;
            img333.onload = function() {
                contextCursor.drawImage(img333, 0, 0, 52, 58);
                cvDeta.style.cursor = 'url(' + cursor.toDataURL() + ') 0 57, auto';
            };
            break;
    }
}

function setBox(box) {
    activeBox = box;
    resetButtons();
    painterColors.style.display = "none";
    painterFondos.style.display = "none";
    painterTampones.style.display = "none";
    painterPinceles.style.display = "none";
    switch (box) {
        case "bote":
            makeCursor(colorActual);
            painterColors.style.display = "block";
            btnBote.className = "button-hover";
            break;
        case "colors":
            painterColors.style.display = "block";
            btnColores.className = "button-hover";
            break;
        case "fondos":
            painterFondos.style.display = "block";
            btnFondos.className = "button-hover";
            break;
        case "tampones":
            btnTampones.className = "button-hover";
            painterTampones.style.display = "block";
            break;
        case "pinceles":
            makeCursor(colorActual);
            btnPincel.className = "button-hover";
            painterPinceles.style.display = "block";
            break;
        case "goma":
            makeCursor(colorActual);
            btnBorrar.className = "button-hover";
            painterPinceles.style.display = "block";
            break;
    }
}

function scrollPainter(d) {
    var s = document.getElementById("painter-" + activeBox);
    if (d == "bottom") {
        s.scrollTop = s.scrollTop + 100;
    } else {
        s.scrollTop = s.scrollTop - 100;
    }
}

function changeBackground(imgSrc) {
    if (cvBack && cvBack.getContext) {
        var contextBG = cvBack.getContext('2d');
        var imgBG = new Image;
        imgBG.crossOrigin = "anonymous";
        imgBG.onload = function() {
            contextBG.drawImage(imgBG, 0, 0, 600, 470);
            cPush(cvBack, "back");
        };
        imgBG.src = imgSrc;
    }
}
var colorActual;

function setColor(color) {
    colorActual = color;
    if (herramienta != "fill") {
        setTool("pincel");
        btnPincel.className = "button-hover";
    }
    makeCursor(color);
    Rgb(color);
}

function resetButtons() {
    btnPincel.className = "";
    btnBote.className = "";
    btnBorrar.className = "";
    btnTampones.className = "";
    btnFondos.className = "";
    btnColores.className = "";
}

function setTool(t) {
    resetButtons();
    switch (t) {
        case "pincel":
            herramienta = "pincel";
            setBox("pinceles");
            break;
        case "fill":
            herramienta = "fill";
            setBox("bote");
            break;
        case "goma":
            herramienta = "goma";
            setBox("goma");
            break;
        case "tampones":
            herramienta = "tampones";
            btnTampones.className = "button-hover";
            break;
    }
}

function setTampon(url) {
    resetButtons();
    cvDeta.style.cursor = 'url(' + url + '), auto';
    setTool('tampones');
    document.getElementById('tamponUrl').value = url;
}
var imgIniDetalle = "";
var imgIniFill = "";

function loadPainter(imgDeta, imgFill) {
    imgIniDetalle = imgDeta;
    imgIniFill = imgFill
    div = document.getElementById("painter");
    InitCanvas(imgDeta, imgFill, 600, 470);
    setTool("fill");
    setColor('rgb(0,204,255)');
    movil = true;
    setBox("colors");
    document.getElementById("painter-loader").style.display = "none";
    var rmsHasFlash = false;
    try {
        var fo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash');
        if (fo) {
            rmsHasFlash = true;
        }
    } catch (e) {
        if (navigator.mimeTypes && navigator.mimeTypes['application/x-shockwave-flash'] != undefined && navigator.mimeTypes['application/x-shockwave-flash'].enabledPlugin) {
            rmsHasFlash = true;
        }
    }
    if (!rmsHasFlash) {
       // closeAd();
    }
}

function InitCanvas(img1, img2, ancho, alto) {
    ancho = 760;
    alto = 485;
    cvBack.width = ancho;
    cvBack.height = alto;
    cvBack.style.zIndex = 1;
    cvBack.style.position = "absolute";
    cvBack.style.top = "0";
    cvBack.style.left = "0";
    div.appendChild(cvBack);
    if (cvBack && cvBack.getContext) {
        var context = cvBack.getContext('2d');
        if (context) {
            context.fillStyle = "white";
            context.fillRect(0, 0, ancho, alto);
            BackInicial = cvBack.toDataURL()
        }
    }
    cvFill.width = ancho;
    cvFill.height = alto;
    cvFill.style.zIndex = 2;
    cvFill.style.position = "absolute";
    cvFill.style.top = "0";
    cvFill.style.left = "0";
    div.appendChild(cvFill);
    if (cvFill && cvFill.getContext) {
        var contextFill = cvFill.getContext('2d');
        if (contextFill) {
            contextFill.fillStyle = "transparent";
            contextFill.fillRect(0, 0, ancho, alto);
            contextFill.imageSmoothingEnabled = false;
            contextFill.mozImageSmoothingEnabled = false;
            contextFill.oImageSmoothingEnabled = false;
            contextFill.msImageSmoothingEnabled = false;
            contextFill.fillStyle = "rgba(240, 240, 240, 0.1)";
        }
        var img = new Image;
        img.crossOrigin = "Anonymous";
        img.onload = function() {
            if (tipo == 2) {
                contextFill.drawImage(img, 48, 0);
            } else {
                contextFill.drawImage(img, 0, 0);
            }
            FillInicial = cvFill.toDataURL()
        };
        img.src = img1;
    }
    cvTrans.width = ancho;
    cvTrans.height = alto;
    cvTrans.style.zIndex = 3;
    cvTrans.style.position = "absolute";
    cvTrans.style.top = "0";
    cvTrans.style.left = "0";
    div.appendChild(cvTrans);
    if (cvTrans && cvTrans.getContext) {
        if (contextTrans) {
            contextTrans.fillStyle = "transparent";
            contextTrans.fillRect(0, 0, ancho, alto);
            TransInicial = cvTrans.toDataURL();
            contextTrans.imageSmoothingEnabled = false;
            contextTrans.mozImageSmoothingEnabled = false;
            contextTrans.oImageSmoothingEnabled = false;
            contextTrans.msImageSmoothingEnabled = false;
        }
    }
    cvDeta.width = ancho;
    cvDeta.height = alto;
    cvDeta.style.zIndex = 4;
    cvDeta.style.position = "absolute";
    cvDeta.style.top = "0";
    cvDeta.style.left = "0";
    div.appendChild(cvDeta);
    if (cvDeta && cvDeta.getContext) {
        var contextDeta = cvDeta.getContext('2d');
        if (contextDeta) {
            contextDeta.fillStyle = "rgba(240, 240, 240, 0.1)";
            contextDeta.fillRect(0, 0, ancho, alto);
            contextDeta.imageSmoothingEnabled = false;
            contextDeta.mozImageSmoothingEnabled = false;
            contextDeta.oImageSmoothingEnabled = false;
            contextDeta.msImageSmoothingEnabled = false;
        }
        var imgDeta = new Image;
        imgDeta.crossOrigin = "Anonymous";
        imgDeta.onload = function() {
            if (tipo == 2) {
                contextDeta.drawImage(imgDeta, 48, 0);
            } else {
                contextDeta.drawImage(imgDeta, 0, 0);
            }
        };
        imgDeta.src = img2;
    }
}
var PainterLoaded = false;
var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    x = w.innerWidth || e.clientWidth || g.clientWidth,
    y = w.innerHeight || e.clientHeight || g.clientHeight;
div = document.getElementById("container");
var dibujoLibre = false;
var port = false;
var tmp1;
var tmp2;
var ceraActual = null;
var BackInicial = "";
var TransInicial = "";
var FillInicial = "";

function dataURItoBlob(dataURI) {
    var binary = atob(dataURI.split(',')[1]);
    var array = [];
    for (var i = 0; i < binary.length; i++) {
        array.push(binary.charCodeAt(i));
    }
    return new Blob([new Uint8Array(array)], {
        type: 'image/jpeg'
    });
}

function addFavoritos() {
    var formData = new FormData;
    var xhr = new XMLHttpRequest;
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            window.open(xhr.responseText);
        }
    }
    xhr.open('POST', httpHost + 'favorito.php', false);
    xhr.send(formData);
}

function getScreenShoot() {
    cvSave.height = 470;
    cvSave.width = 600;
    var bufferScreenshot = cvSave;
    var contextScreenshot = bufferScreenshot.getContext("2d");
    contextBack = cvBack.getContext('2d');
    contextBack.scale(1, 1);
    contextScreenshot.drawImage(cvBack, 0, 0, 600, 470);
    contextFill = cvFill.getContext('2d');
    contextFill.scale(1, 1);
    contextScreenshot.drawImage(cvFill, 0, 0, 600, 470);
    contextTrans = cvTrans.getContext('2d');
    contextTrans.scale(1, 1);
    contextScreenshot.drawImage(cvTrans, 0, 0, 600, 470);
    contextDeta = cvDeta.getContext('2d');
    contextDeta.scale(1, 1);
    contextScreenshot.drawImage(cvDeta, 0, 0, 600, 470);
    return bufferScreenshot;
}

// function saveFile() {
//     if (!HaPintado) {
//         document.getElementById("painter-alert").style.display = "block";
//     } else {
//         document.getElementById("painter-loader").style.display = "block";
//         var formData = new FormData;
//         var bufferScreenshot = getScreenShoot();
//         formData.append("pintado.jpg", bufferScreenshot.toDataURL('image/jpg', 0.8));
//         formData.append("UrlImagenFull", UrlImagenFull);
//         formData.append("iddibu", id);
//         formData.append("idi", idi);
//         formData.append("tipo", tipo);
//         var xhr = new XMLHttpRequest;
//         xhr.onreadystatechange = function() {
//             if (xhr.readyState == 4) {
//                 if (xhr.responseText == "ko") {
//                     document.getElementById("painter-loader").style.display = "none";
//                 } else {
//                     document.location.href = xhr.responseText;
//                 }
//             }
//         }
//         xhr.open('POST', '/save/?tipo=' + tipo, false);
//         xhr.send(formData);
//     }
// }

// function downloadFile() {
//     var bufferScreenshot = getScreenShoot();
//     var link = document.createElement('a');
//     link.download = nombre_dibujo + ".jpg";
//     link.href = bufferScreenshot.toDataURL('image/jpg');
//     link.click();
// }

// function printFile() {
//     var formData = new FormData;
//     var bufferScreenshot = getScreenShoot();
//     formData.append("pintado.jpg", bufferScreenshot.toDataURL('image/jpg'));
//     formData.append("UrlImagenFull", UrlImagenFull);
//     var xhr = new XMLHttpRequest;
//     xhr.onreadystatechange = function() {
//         if (xhr.readyState == 4) {
//             window.open("/reso/paint/print/dibujo.php?nombre=" + nombre_dibujo + "&imagen=" + xhr.responseText);
//         }
//     }
//     xhr.open('POST', httpHost + 'download.php?tipo=' + tipo, false);
//     xhr.send(formData);
// }
var arrBack = new Array;
var arrTrans = new Array;
var arrFill = new Array;
var arr = new Array;
var arrPasos = new Array;
var arrCapas = new Array;
var cPaso = -1;
var undo = true;
var redo = true;
var arRedo = new Array;

function cPush(e, t) {
    cPaso++;
    if (cPaso < arr.length - 1) {
        arr.length = cPaso
    }
    contextFill = cvFill.getContext("2d");
    contextTrans = cvTrans.getContext("2d");
    contextBack = cvBack.getContext("2d");
    if (cPaso > 0) {
        HaPintado = true;
        switch (t) {
            case "trans":
                arr[cPaso] = [arr[cPaso - 1][0], arr[cPaso - 1][1], contextTrans.getImageData(0, 0, ancho, alto)];
                break;
            case "fill":
                arr[cPaso] = [arr[cPaso - 1][0], contextFill.getImageData(0, 0, cvFill.width, cvFill.height), arr[cPaso - 1][2]];
                break;
            case "back":
                arr[cPaso] = [contextBack.getImageData(0, 0, ancho, alto), arr[cPaso - 1][1], arr[cPaso - 1][2]];
                break
        }
    } else {
        HaPintado = false;
        arr[cPaso] = [contextBack.getImageData(0, 0, ancho, alto), contextFill.getImageData(0, 0, ancho, alto), contextTrans.getImageData(0, 0, ancho, alto)]
    }
}

function cRedo() {
    undo = true;
    var e = new Array;
    if (cPaso < arr.length - 1) {
        cPaso++;
        e = arr[cPaso];
        contextFill.putImageData(e[1], 0, 0);
        contextTrans.putImageData(e[2], 0, 0);
        contextBack.putImageData(e[0], 0, 0)
    }
}

function Undo() {
    var e = new Array;
    redo = true;
    if (cPaso >= 0) {
        e = arr[cPaso - 1];
        cPaso--;
        contextFill.putImageData(e[1], 0, 0);
        contextTrans.putImageData(e[2], 0, 0);
        contextBack.putImageData(e[0], 0, 0)
    } else {
        if (cPaso == 0) {
            cPaso--
        }
        var t = new Image;
        t.src = FillInicial;
        t.onload = function() {
            contextFill.drawImage(t, 0, 0, ancho / escala, alto / escala);
            t = null
        };
        var n = new Image;
        n.src = TransInicial;
        n.onload = function() {
            contextTrans.clearRect(0, 0, ancho, alto);
            contextTrans.drawImage(n, 0, 0);
            n = null
        };
        var r = new Image;
        r.src = BackInicial;
        r.onload = function() {
            contextBack.clearRect(0, 0, ancho, alto);
            contextBack.drawImage(r, 0, 0);
            r = null
        }
    }
}

function Rgb(rgb) {
    if (!(this instanceof Rgb)) return new Rgb(rgb);
    var c = rgb.match(/\d+(\.\d+)?%?/g);
    if (c) {
        c = c.map(function(itm) {
            if (itm.indexOf('%') != -1) itm = parseFloat(itm) * 2.55;
            return parseInt(itm);
        });
    }
    document.getElementById('red').value = c[0];
    document.getElementById('green').value = c[1];
    document.getElementById('blue').value = c[2];
}

function intval(name) {
    return parseInt(document.getElementById(name).value);
}

function findPos(obj) {
    var obj = cvFill;
    var curleft = 0,
        curtop = 0;
    if (obj.offsetParent) {
        do {
            curleft += obj.offsetLeft;
            curtop += obj.offsetTop;
        } while (obj = obj.offsetParent);
        obj = null;
        return {
            x: curleft,
            y: curtop
        };
    }
    return undefined;
}

function imageSmoothingEnabled(ctx, state) {
    ctx.mozImageSmoothingEnabled = state;
    ctx.oImageSmoothingEnabled = state;
    ctx.imageSmoothingEnabled = state;
}
var W = ancho;
var H = alto;
var pencil = new toolPencil();
var filler = new toolFiller();
var tampones = new toolTampones();
var goma = new toolGoma();

function isSameColor(img, x, y, color) {
    var data = img.data;
    var offset = ((y * (ancho * 4)) + (x * 4));
    if ((data[offset + 0]) != ((color >> 24) & 0xFF) || (data[offset + 1]) != ((color >> 16) & 0xFF) || (data[offset + 2]) != ((color >> 8) & 0xFF)) {
        return false;
    }
    return true;
}

function getPixelColor(img, x, y) {
    var data = img.data;
    var offset = ((y * (ancho * 4)) + (x * 4));
    var result = data[offset + 0] << 24;
    result |= data[offset + 1] << 16;
    result |= data[offset + 2] << 8;
    return result;
}

function setPixelColor(img, x, y, color) {
    var data = img.data;
    var offset = ((y * (ancho * 4)) + (x * 4));
    data[offset + 0] = (color >> 24) & 0xFF;
    data[offset + 1] = (color >> 16) & 0xFF;
    data[offset + 2] = (color >> 8) & 0xFF;
}

function componentToHex(c) {
    var hex = c.toString(16);
    return hex.length == 1 ? "0" + hex : hex;
}

function rgbToHex(r, g, b) {
    return "#" + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1);
}

function toolFiller() {
    var dx = [0, -1, +1, 0];
    var dy = [-1, 0, 0, +1];
    var tool = this;
    this.started = true;
    this.touchstart = this.mousedown = function(ev) {
        resetButtons();
        btnBote.className = "button-hover";
        if (tool.started) {
            var pos = findPos(this);
            var x = Math.round(ev.pageX - pos.x);
            var y = Math.round(ev.pageY - pos.y);
            var contextFill = cvFill.getContext('2d');
            var img = contextFill.getImageData(0, 0, ancho, alto);
            var imgData = img.data;
            var hitColor = getPixelColor(img, x, y);
            if (hitColor == "0") {
                var contextDetalle = cvDeta.getContext('2d');
                var imgDetalle = contextDetalle.getImageData(0, 0, ancho, alto);
                hitColor = getPixelColor(imgDetalle, x, y);
            }
            var newColor = (intval('red') << 24) | (intval('green') << 16) | (intval('blue') << 8);
            if (hitColor == "0" || hitColor == "-336860416") {
                if (cvBack && cvBack.getContext) {
                    var contextD = cvDeta.getContext('2d');
                    var imgD = contextD.getImageData(0, 0, ancho, alto);
                    hitColor = getPixelColor(imgD, x, y);
                    if (hitColor != 0) {
                        var contextBG = cvBack.getContext('2d');
                        if (contextBG) {
                            contextBG.fillStyle = "rgb(" + intval('red') + "," + intval('green') + "," + intval('blue') + ")";
                            contextBG.fillRect(0, 0, W, H);
                        }
                        cPush(cvBack, "back");
                    }
                }
            } else {
                if (hitColor != newColor) {
                    var stack = [];
                    stack.push(x);
                    stack.push(y);
                    while (stack.length > 0) {
                        var curPointY = stack.pop();
                        var curPointX = stack.pop();
                        for (var i = 0; i < 4; i++) {
                            var nextPointX = curPointX + dx[i];
                            var nextPointY = curPointY + dy[i];
                            if (nextPointX < 0 || nextPointY < 0 || nextPointX >= W || nextPointY >= H) {
                                continue;
                            }
                            var nextPointOffset = (nextPointY * W + nextPointX) * 4;
                            if (imgData[nextPointOffset + 0] == ((hitColor >> 24) & 0xFF) && imgData[nextPointOffset + 1] == ((hitColor >> 16) & 0xFF) && imgData[nextPointOffset + 2] == ((hitColor >> 8) & 0xFF)) {
                                imgData[nextPointOffset + 0] = (newColor >> 24) & 0xFF;
                                imgData[nextPointOffset + 1] = (newColor >> 16) & 0xFF;
                                imgData[nextPointOffset + 2] = (newColor >> 8) & 0xFF;
                                stack.push(nextPointX);
                                stack.push(nextPointY);
                            }
                        }
                    }
                    contextFill.putImageData(img, 0, 0);
                    contextFill.stroke();
                    contextFill.restore();
                    cPush(cvFill, "fill");
                }
            }
            contextFill.closePath();
            contextFill.stroke();
            imgData = null;
            stack = null;
            img = null;
            this.started = false;
        } else {
            ev.preventDefault();
        }
    };
}

function toolGoma() {
    var tool = this;
    this.started = false;
    this.touchstart = this.mousedown = function(ev) {
        var context = cvTrans.getContext('2d');
        context.beginPath();
        var pos = findPos(this);
        var x = ev.pageX - pos.x;
        var y = ev.pageY - pos.y;
        var img = context.getImageData(0, 0, W, H);
        var hitColor = getPixelColor(img, x, y);
        context.moveTo(x, y);
        tool.started = true;
        context.lineWidth = Math.round(intval("width") / 2);
        context.globalCompositeOperation = 'destination-out';
        context.fillStyle = 'rgba(0,0,0,1)';
        context.strokeStyle = 'rgba(0,0,0,1)';
        context.lineCap = 'round';
        context.lineJoin = 'round';
        context.restore();
    };
    this.touchmove = this.mousemove = function(ev) {
        if (tool.started) {
            var context = cvTrans.getContext('2d');
            var pos = findPos(this);
            var x = ev.pageX - pos.x;
            var y = ev.pageY - pos.y;
            context.lineTo(x, y);
            context.stroke();
            context.restore();
        }
    };
    this.touchstop = this.mouseup = function(ev) {
        resetButtons();
        btnBorrar.className = "button-hover";
        tool.started = false;
        cPush(cvTrans, "trans");
        cvTrans.stroke();
        cvTrans.restore();
    };
}

function toolTampones() {
    var tool = this;
    this.touchstart = this.mousedown = function(ev) {
        var context = cvTrans.getContext('2d');
        var pos = findPos(this);
        var x = ev.pageX - pos.x;
        var y = ev.pageY - pos.y;
        context.globalCompositeOperation = 'source-over';
        context.moveTo(x, y);
        var timg = new Image;
        timg.onload = function() {
            context.drawImage(timg, (x), (y), 35, 35);
            cPush(cvTrans, "trans");
        };
        timg.crossOrigin = "anonymous";
        timg.src = document.getElementById('tamponUrl').value;
    };
    this.touchend = this.mouseup = function(ev) {
        resetButtons();
        btnTampones.className = "button-hover";
    };
}

function toolPencil() {
    var tool = this;
    this.started = false;
    this.touchstart = this.mousedown = function(ev) {
        contextTrans.beginPath();
        var pos = findPos(this);
        var x = ev.pageX - pos.x;
        var y = ev.pageY - pos.y;
        contextTrans.moveTo(x, y);
        tool.started = true;
        contextTrans.shadowBlur = 10;
        contextTrans.lineWidth = Math.round(intval("width") / 2);
        contextTrans.globalCompositeOperation = "source-over";
        contextTrans.strokeStyle = "rgb(" + intval("red") + "," + intval("green") + "," + intval("blue") + ")";
        contextTrans.lineCap = lc;
        contextTrans.lineJoin = lj;
        contextTrans.stroke();
        pos = null;
        x = null;
        y = null;
    };
    this.touchmove = this.mousemove = function(ev) {
        if (tool.started) {
            var contextTrans = cvTrans.getContext('2d');
            var pos = findPos(this);
            contextTrans.lineTo(ev.pageX - pos.x, ev.pageY - pos.y);
            contextTrans.stroke();
        }
    };
    this.touchstop = this.mouseup = function(ev) {
        resetButtons();
        btnPincel.className = "button-hover";
        tool.started = false;
        cPush(cvTrans, "trans");
        contextTrans.globalCompositeOperation = "source-over";
        contextTrans.stroke();
        contextTrans.restore();
    };
}

function evCanvas(ev) {
    ev._x = ev.layerX;
    ev._y = ev.layerY;
    var tool;
    switch (herramienta) {
        case "pincel":
            tool = pencil;
            break;
        case "fill":
            tool = filler;
            break;
        case "goma":
            tool = goma;
            break;
        case "tampones":
            tool = tampones;
            break;
        default:
            tool = pencil;
            break;
    }
    var func = tool[ev.type];
    if (func) {
        func(ev);
    }
}
cvDeta.addEventListener('mousemove', evCanvas, false);
cvDeta.addEventListener('mouseup', evCanvas, false);
cvDeta.addEventListener('mousedown', evCanvas, false);