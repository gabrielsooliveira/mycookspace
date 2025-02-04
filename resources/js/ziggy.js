const Ziggy = {"url":"http:\/\/mycookspace.test","port":null,"defaults":{},"routes":{"home":{"uri":"\/","methods":["GET","HEAD"]},"explorer":{"uri":"explorar","methods":["GET","HEAD"]},"article":{"uri":"artigo\/{article}","methods":["GET","HEAD"],"parameters":["article"]},"explorer-list":{"uri":"explorar\/{meet}","methods":["GET","HEAD"],"parameters":["meet"]},"storage.local":{"uri":"storage\/{path}","methods":["GET","HEAD"],"wheres":{"path":".*"},"parameters":["path"]}}};
if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
  Object.assign(Ziggy.routes, window.Ziggy.routes);
}
export { Ziggy };
