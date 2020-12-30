! function (t, e) {
	for (var n in e) t[n] = e[n]
}(window, function (t) {
	var e = {};

	function n(i) {
		if (e[i]) return e[i].exports;
		var r = e[i] = {
			i: i,
			l: !1,
			exports: {}
		};
		return t[i].call(r.exports, r, r.exports, n), r.l = !0, r.exports
	}
	return n.m = t, n.c = e, n.d = function (t, e, i) {
		n.o(t, e) || Object.defineProperty(t, e, {
			enumerable: !0,
			get: i
		})
	}, n.r = function (t) {
		"undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
			value: "Module"
		}), Object.defineProperty(t, "__esModule", {
			value: !0
		})
	}, n.t = function (t, e) {
		if (1 & e && (t = n(t)), 8 & e) return t;
		if (4 & e && "object" == typeof t && t && t.__esModule) return t;
		var i = Object.create(null);
		if (n.r(i), Object.defineProperty(i, "default", {
				enumerable: !0,
				value: t
			}), 2 & e && "string" != typeof t)
			for (var r in t) n.d(i, r, function (e) {
				return t[e]
			}.bind(null, r));
		return i
	}, n.n = function (t) {
		var e = t && t.__esModule ? function () {
			return t.default
		} : function () {
			return t
		};
		return n.d(e, "a", e), e
	}, n.o = function (t, e) {
		return Object.prototype.hasOwnProperty.call(t, e)
	}, n.p = "", n(n.s = 7)
}([function (t, e, n) {
	"use strict";
	n.d(e, "b", (function () {
		return i
	})), n.d(e, "c", (function () {
		return r
	})), n.d(e, "d", (function () {
		return o
	})), n.d(e, "a", (function () {
		return a
	})), n.d(e, "e", (function () {
		return c
	}));
	var i = 150,
		r = {
			x: "y",
			y: "x"
		},
		o = {
			37: "right",
			38: "bottom",
			39: "left",
			40: "top",
			83: "top",
			87: "bottom",
			65: "right",
			68: "left"
		},
		a = {
			TOP: "TOP",
			RIGHT: "RIGHT",
			BOTTOM: "BOTTOM",
			LEFT: "LEFT",
			NONE: "NONE"
		},
		c = ["width", "height"]
}, function (t, e, n) {
	"use strict";

	function i(t, e) {
		if (!t || 1 !== t.nodeType) throw new Error("addStyle(".concat(t, ", ").concat(e, ") failed."));
		for (var n in e) e.hasOwnProperty(n) && (t.style[n] = e[n])
	}
	n.d(e, "a", (function () {
		return i
	}))
}, function (t, e, n) {
	"use strict";
	n.d(e, "a", (function () {
		return r
	}));
	var i = n(1);

	function r(t, e, n) {
		var r = t.options,
			o = "translate(".concat(n.x * r.tileSize, "px, ").concat(n.y * r.tileSize, "px) scale(").concat(r.scale, ")"),
			a = "translate(".concat(e.x * r.tileSize, "px, ").concat(e.y * r.tileSize, "px) scale(").concat(r.scale, ")");
		Object(i.a)(e.tileElement, {
			transform: o
		}), Object(i.a)(n.tileElement, {
			transform: a
		});
		var c = e.x,
			u = e.y,
			l = e.order;
		e.x = n.x, e.y = n.y, e.order = n.order, n.x = c, n.y = u, n.order = l
	}
}, function (t, e, n) {
	"use strict";

	function i(t, e, n) {
		return t.tiles.filter((function (t) {
			return t.x === e && t.y === n
		}))[0]
	}
	n.d(e, "a", (function () {
		return i
	}))
}, function (t, e, n) {
	"use strict";

	function i(t) {
		return t.filter((function (t) {
			return !0 === (t && t.isEmpty)
		}))[0]
	}
	n.d(e, "a", (function () {
		return i
	}))
}, function (t, e, n) {
	"use strict";
	(function (t) {
		n.d(e, "a", (function () {
			return r
		}));
		var i = n(6);

		function r(e) {
			t.addEventListener && "function" == typeof t.addEventListener && t.addEventListener("keydown", i.a.bind(null, e))
		}
	}).call(this, n(8))
}, function (t, e, n) {
	"use strict";
	n.d(e, "a", (function () {
		return c
	}));
	var i = n(4),
		r = n(3),
		o = n(2),
		a = n(0);

	function c(t, e) {
		if (t.isPlaying) {
			var n = Object(i.a)(t.tiles);
			switch (a.d[e.keyCode]) {
				case "top":
					var c = Object(r.a)(t, n.x, n.y - 1);
					if (!c) return;
					Object(o.a)(t, c, n);
					break;
				case "right":
					var u = Object(r.a)(t, n.x + 1, n.y);
					if (!u) return;
					Object(o.a)(t, u, n);
					break;
				case "bottom":
					var l = Object(r.a)(t, n.x, n.y + 1);
					if (!l) return;
					Object(o.a)(t, l, n);
					break;
				case "left":
					var s = Object(r.a)(t, n.x - 1, n.y);
					if (!s) return;
					Object(o.a)(t, s, n)
			}
		}
	}
}, function (t, e, n) {
	t.exports = n(9)
}, function (t, e) {
	var n;
	n = function () {
		return this
	}();
	try {
		n = n || new Function("return this")()
	} catch (t) {
		"object" == typeof window && (n = window)
	}
	t.exports = n
}, function (t, e, n) {
	"use strict";
	n.r(e);
	var i = {
			tileSize: 120,
			rows: 4,
			columns: 4,
			difficulty: 4,
			scale: .996,
			image: {
				preserve: "width",
				offset: 0
			}
		},
		r = n(0),
		o = n(1);
	var a = n(2);
	var c = n(4);

	function u(t, e) {
		var n, i, o = t.tiles,
			u = Object(c.a)(o),
			l = (i = e, (n = u).x === i.x ? "x" : n.y === i.y ? "y" : void 0);
		if (l) {
			var s = r.c[l];
			! function (t, e, n) {
				var i = e[0];
				if (i)
					if (i.isEmpty)
						for (var r = 1; r < e.length; r++) Object(a.a)(t, i, e[r]);
					else {
						var o = e[e.length - 1];
						if (o)
							for (var c = e.length - 1; c >= 0; c--) Object(a.a)(t, o, e[c])
					}
			}(t, function (t, e, n, i, o) {
				var a = t.tiles,
					c = r.c[o];
				return a.filter((function (t) {
					return t[c] >= n[c] && t[c] <= i[c] && t[o] === e[o]
				})).sort((function (t, e) {
					return t[c] > e[c] ? -1 : t[c] < e[c] ? 1 : 0
				}))
			}(t, u, e[s] < u[s] ? e : u, e[s] < u[s] ? u : e, l))
		}
	}

	function l(t) {
		return function () {
			if (t.isPlaying && t.isSolved()) {
				clearInterval(t.timer);
				var e = new Event("solve");
				e.time = t.time - 1, t.stage.dispatchEvent(e), t.isPlaying = !1,
					function (t) {
						var e = t.tiles,
							n = t.options,
							i = 5,
							a = [n.scale, .85],
							c = [0, -30],
							u = ["y", "x"][Math.floor(2 * Math.random())],
							l = setInterval((function () {
								0 === i && clearInterval(l);
								for (var t = 0; t < e.length; t++) {
									var r = e[t],
										s = r.x * n.tileSize,
										f = r.y * n.tileSize,
										d = "translate(".concat(s, "px, ").concat(f, "px) scale(").concat(a[i % a.length], ")"),
										v = "rotate(".concat(c[i * r[u] % c.length], "deg)"),
										p = "".concat(d, " ").concat(v);
									Object(o.a)(r.tileElement, {
										transform: p
									})
								}
								i--
							}), r.b)
					}(t)
			}
		}
	}

	function s(t, e) {
		return e.x - t.x > 0 ? r.a.RIGHT : e.x - t.x < 0 ? r.a.LEFT : e.y - t.y > 0 ? r.a.BOTTOM : e.y - t.y < 0 ? r.a.TOP : r.a.NONE
	}

	function f(t) {
		return {
			x: t.clientX,
			y: t.clientY
		}
	}

	function d(t, e) {
		e.tileElement.addEventListener("click", function (t, e) {
			return function () {
				t.isPlaying && u(t, e)
			}
		}(t, e)), e.tileElement.addEventListener("transitionend", l(t)), e.tileElement.addEventListener("touchstart", function (t, e) {
			return function (n) {
				t.touchDetails = {
					touch: n.touches[0],
					tile: e
				}
			}
		}(t, e)), e.tileElement.addEventListener("touchmove", function (t, e) {
			return function (n) {
				var i = n.touches[0];
				if (t.isPlaying && e.order === t.touchDetails.tile.order) {
					i.clientX, t.touchDetails.touch.clientX, i.clientY, t.touchDetails.touch.clientY;
					var r = Object(c.a)(t.tiles);
					if (r.x === t.touchDetails.tile.x || r.y === t.touchDetails.tile.y) {
						var o = s(t.touchDetails.tile, r);
						s(f(t.touchDetails.touch), f(i)) === o && (t.touchDetails.objectiveCompleted || (t.touchDetails.objectiveCompleted = !0, u(t, t.touchDetails.tile)))
					}
				}
			}
		}(t, e)), e.tileElement.addEventListener("touchend", function (t) {
			return function (e) {
				t.touchDetails = {
					touch: null,
					tile: null,
					objectiveCompleted: !1
				}
			}
		}(t))
	}
	var v = n(5);

	function p(t, e) {
		if (!e.image.url) throw new Error("You MUST specify the image to use.");
		if (t.tiles = [], t.isPlaying = !1, t.time = 0, t.touchDetails = {
				touch: null,
				tile: null,
				objectiveCompleted: !1
			}, e.image.preserve && r.e.indexOf(e.image.preserve) < 0) throw new Error("Invalid value '".concat(e.image.preserve, "' for the option image.preserve"));
		var n = Object.assign({}, i.image, e.image);
		return t.options = Object.assign({}, i, e), t.options.image = n, t.stage = function (t) {
				var e = t.options,
					n = document.createElement("div");
				return Object(o.a)(n, {
					position: "relative",
					width: "".concat(e.tileSize * e.columns, "px"),
					height: "".concat(e.tileSize * e.rows, "px")
				}), n
			}(t),
			function (t) {
				for (var e = t.options, n = t.tiles, i = 0, a = 0; a < e.rows; a++)
					for (var c = 0; c < e.columns; c++) {
						var u = document.createElement("div"),
							l = c * e.tileSize,
							s = a * e.tileSize,
							f = i === e.rows * e.columns - 1,
							v = "",
							p = "";
						"width" === e.image.preserve && (v = "".concat(e.columns * e.tileSize, "px auto"), p = "-".concat(l, "px -").concat(s - e.image.offset, "px")), "height" === e.image.preserve && (v = "auto ".concat(e.rows * e.tileSize, "px"), p = "-".concat(l - e.image.offset, "px -").concat(s, "px")), Object(o.a)(u, {
							width: "".concat(e.tileSize, "px"),
							height: "".concat(e.tileSize, "px"),
							position: "absolute",
							left: "0",
							top: "0",
							transform: "translate(".concat(l, "px, ").concat(s, "px) scale(").concat(e.scale, ")"),
							transition: "transform ".concat(r.b, "ms linear"),
							zIndex: 1
						}), f || Object(o.a)(u, {
							backgroundImage: "url(".concat(e.image.url, ")"),
							backgroundRepeat: "no-repeat",
							backgroundPosition: p,
							backgroundSize: v,
							zIndex: 2
						});
						var h = {
							x: c,
							y: a,
							order: i,
							isEmpty: f,
							tileElement: u
						};
						d(t, h), n.push(h), i++
					}
			}(t),
			function (t) {
				var e = t.tiles,
					n = t.stage;
				if (!(e.length < 0))
					for (var i = 0; i < e.length; i++) n.appendChild(e[i].tileElement)
			}(t), Object(v.a)(t), t.stage
	}

	function h(t) {
		var e = new Event("timeupdate");
		e.time = t.time++, t.stage.dispatchEvent(e)
	}
	var m = n(3);

	function y(t, e) {
		var n = Object(c.a)(t.tiles),
			i = function (t, e) {
				return [Object(m.a)(t, e.x, e.y - 1), Object(m.a)(t, e.x + 1, e.y), Object(m.a)(t, e.x, e.y + 1), Object(m.a)(t, e.x - 1, e.y)].filter((function (t) {
					return t
				}))
			}(t, n);
		i = i.filter((function (t) {
			return t !== e
		}));
		var r, o, u = (r = i, (o = Math.floor(Math.random() * r.length)) === r.length && (o -= 1), r[o]);
		return Object(a.a)(t, u, n), u
	}
	var g = g || window;

	function b(t) {
		if (!this || this === g) return new b(t);
		p(this, t)
	}
	b.prototype.render = function (t) {
		var e = document.getElementById(t);
		if (!e) throw new Error("Could not find HTML element with id: ".concat(t));
		e.appendChild(this.stage)
	}, b.prototype.start = function () {
		var t = this;
		return this.isPlaying ? new Promise((function (t) {
			t()
		})) : this.shuffle().then((function () {
			t.isPlaying = !0, h(t), t.timer = setInterval((function () {
				h(t)
			}), 1e3), t.stage.dispatchEvent(new Event("start"))
		}))
	}, b.prototype.isSolved = function () {
		for (var t = this.tiles, e = 0; e < t.length; e++) {
			if (t[e].order !== e) return !1
		}
		return !0
	}, b.prototype.shuffle = function () {
		var t = this,
			e = this.options;
		return new Promise((function (n) {
			var i, r = Math.floor(Math.abs(e.difficulty * e.rows * e.columns)),
				o = setInterval((function () {
					0 === r && (clearInterval(o), n()), i = y(t, i), r--
				}), 5)
		}))
	}, b.prototype.onStart = function (t) {
		this.stage.addEventListener("start", t)
	}, b.prototype.onSolve = function (t) {
		var e = this;
		this.stage.addEventListener("solve", (function (n) {
			clearInterval(e.timer), t.call(e, n), e.time = 0
		}))
	}, b.prototype.onTimeUpdate = function (t) {
		this.stage.addEventListener("timeupdate", t)
	}, n.d(e, "Puzzle", (function () {
		return b
	}))
}]));