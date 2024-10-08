var _____WB$wombat$assign$function_____ = function (name) {
  return (
    (self._wb_wombat &&
      self._wb_wombat.local_init &&
      self._wb_wombat.local_init(name)) ||
    self[name]
  )
}
if (!self.__WB_pmw) {
  self.__WB_pmw = function (obj) {
    this.__WB_source = obj
    return this
  }
}
{
  let window = _____WB$wombat$assign$function_____('window')
  let self = _____WB$wombat$assign$function_____('self')
  let document = _____WB$wombat$assign$function_____('document')
  let location = _____WB$wombat$assign$function_____('location')
  let top = _____WB$wombat$assign$function_____('top')
  let parent = _____WB$wombat$assign$function_____('parent')
  let frames = _____WB$wombat$assign$function_____('frames')
  let opener = _____WB$wombat$assign$function_____('opener')

  !(function (t) {
    var n = {}
    function e(r) {
      if (n[r]) return n[r].exports
      var o = (n[r] = { i: r, l: !1, exports: {} })
      return t[r].call(o.exports, o, o.exports, e), (o.l = !0), o.exports
    }
    ;(e.m = t),
      (e.c = n),
      (e.d = function (t, n, r) {
        e.o(t, n) || Object.defineProperty(t, n, { enumerable: !0, get: r })
      }),
      (e.r = function (t) {
        'undefined' != typeof Symbol &&
          Symbol.toStringTag &&
          Object.defineProperty(t, Symbol.toStringTag, { value: 'Module' }),
          Object.defineProperty(t, '__esModule', { value: !0 })
      }),
      (e.t = function (t, n) {
        if ((1 & n && (t = e(t)), 8 & n)) return t
        if (4 & n && 'object' == typeof t && t && t.__esModule) return t
        var r = Object.create(null)
        if (
          (e.r(r),
          Object.defineProperty(r, 'default', { enumerable: !0, value: t }),
          2 & n && 'string' != typeof t)
        )
          for (var o in t)
            e.d(
              r,
              o,
              function (n) {
                return t[n]
              }.bind(null, o)
            )
        return r
      }),
      (e.n = function (t) {
        var n =
          t && t.__esModule
            ? function () {
                return t.default
              }
            : function () {
                return t
              }
        return e.d(n, 'a', n), n
      }),
      (e.o = function (t, n) {
        return Object.prototype.hasOwnProperty.call(t, n)
      }),
      (e.p = ''),
      e((e.s = 0))
  })([
    function (t, n) {
      function e(t, n) {
        var e
        if ('undefined' == typeof Symbol || null == t[Symbol.iterator]) {
          if (
            Array.isArray(t) ||
            (e = (function (t, n) {
              if (!t) return
              if ('string' == typeof t) return r(t, n)
              var e = Object.prototype.toString.call(t).slice(8, -1)
              'Object' === e && t.constructor && (e = t.constructor.name)
              if ('Map' === e || 'Set' === e) return Array.from(t)
              if (
                'Arguments' === e ||
                /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(e)
              )
                return r(t, n)
            })(t)) ||
            (n && t && 'number' == typeof t.length)
          ) {
            e && (t = e)
            var o = 0,
              a = function () {}
            return {
              s: a,
              n: function () {
                return o >= t.length
                  ? { done: !0 }
                  : { done: !1, value: t[o++] }
              },
              e: function (t) {
                throw t
              },
              f: a
            }
          }
          throw new TypeError(
            'Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.'
          )
        }
        var c,
          i = !0,
          u = !1
        return {
          s: function () {
            e = t[Symbol.iterator]()
          },
          n: function () {
            var t = e.next()
            return (i = t.done), t
          },
          e: function (t) {
            ;(u = !0), (c = t)
          },
          f: function () {
            try {
              i || null == e.return || e.return()
            } finally {
              if (u) throw c
            }
          }
        }
      }
      function r(t, n) {
        ;(null == n || n > t.length) && (n = t.length)
        for (var e = 0, r = new Array(n); e < n; e++) r[e] = t[e]
        return r
      }
      var o = (function () {
        'use strict'
        var t = {
            mainURL: 'https://inform.uscapital.ru',
            companyDirectory: '',
            wrapperItemsClass: '.document-widget_wrapper',
            itemBlockClass: '.document-widget_item',
            linkItemClass: null,
            dataType: 'data-document_type',
            dataParametr: 'data-param',
            onBeforeItemAdd: null,
            onAfterItemAdd: null,
            onStart: null,
            onEnd: null
          },
          n = function (n) {
            return new Promise(function (e, r) {
              fetch(
                ''
                  .concat(t.mainURL, '/')
                  .concat(t.companyDirectory, '/json_js.json'),
                n
              )
                .then(function (t) {
                  return 200 !== t.status
                    ? Promise.reject(new Error(t.statusText))
                    : Promise.resolve(t)
                })
                .then(function (t) {
                  return t.json()
                })
                .then(function (t) {
                  e(t)
                })
                .catch(function (t) {
                  r(t)
                })
            })
          },
          r = function (n, r) {
            var o
            return (
              0 == n.children.length
                ? (((o = document.createElement('a')).innerText = r.ORIGIN),
                  (o.href = ''.concat(t.mainURL, '/').concat(r.PATH)),
                  (function (t, n) {
                    if (null != n)
                      if (Array.isArray(n)) {
                        var r,
                          o = e(n)
                        try {
                          for (o.s(); !(r = o.n()).done; ) {
                            var a = r.value
                            t.classList.add(a)
                          }
                        } catch (t) {
                          o.e(t)
                        } finally {
                          o.f()
                        }
                      } else t.classList.add(n)
                  })(o, t.linkItemClass),
                  n.appendChild(o))
                : n.querySelectorAll('*').forEach(function (n) {
                    'A' === n.tagName &&
                      (n.href = ''.concat(t.mainURL, '/').concat(r.PATH)),
                      Object.keys(r).forEach(function (e) {
                        n.getAttribute(t.dataParametr) === e &&
                          (n.innerText = r[e])
                      })
                  }),
              n
            )
          },
          o = function (n, e) {
            var o,
              a,
              c,
              i = n.getAttribute(t.dataType),
              u = ((o = n),
              (a = o.querySelectorAll(t.itemBlockClass)),
              (c = a[0].cloneNode(!0)),
              a.forEach(function (t) {
                o.removeChild(t)
              }),
              c).cloneNode(!0)
            e.filter(function (t) {
              return t.TYPE === i
            }).forEach(function (e, o) {
              'function' == typeof t.onBeforeItemAdd &&
                t.onBeforeItemAdd(o, i, e)
              var a = r(u.cloneNode(!0), e)
              a.setAttribute('data-key', o),
                n.appendChild(a),
                'function' == typeof t.onAfterItemAdd &&
                  t.onAfterItemAdd(o, a, n, i, e)
            })
          }
        return {
          load: function (r) {
            if (
              null ===
                (t = (function (t, n) {
                  for (var e in n)
                    try {
                      n[e].constructor == Object
                        ? (t[e] = MergeRecursive(t[e], n[e]))
                        : (t[e] = n[e])
                    } catch (r) {
                      t[e] = n[e]
                    }
                  return t
                })(t, r)).companyDirectory ||
              null == t.companyDirectory ||
              0 === t.companyDirectory.length
            )
              throw 'Не выбрана компания'
            'function' == typeof t.onStart && t.onStart(),
              n().then(function (n) {
                !(function (t, n) {
                  var r,
                    o =
                      arguments.length > 2 && void 0 !== arguments[2]
                        ? arguments[2]
                        : document,
                    a = o.querySelectorAll(t),
                    c = e(a)
                  try {
                    for (c.s(); !(r = c.n()).done; ) {
                      var i = r.value
                      n(i)
                    }
                  } catch (t) {
                    c.e(t)
                  } finally {
                    c.f()
                  }
                })(t.wrapperItemsClass, function (t) {
                  o(t, n)
                })
              }),
              'function' == typeof t.onEnd && t.onEnd()
          }
        }
      })()
      ;(window.documentWidget = o), (t.exports = o)
    }
  ])
  //# sourceMappingURL=widget.js.map
}
