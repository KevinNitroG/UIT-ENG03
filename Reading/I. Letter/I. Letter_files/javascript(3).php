M.qtype_multianswer=M.qtype_multianswer||{};M.qtype_multianswer.init=function(Y,questiondiv){Y.one(questiondiv).all('span.subquestion').each(function(subqspan){var feedbackspan=subqspan.one('.feedbackspan');if(!feedbackspan){return}
var overlay=new Y.Overlay({srcNode:feedbackspan,visible:!1,align:{node:subqspan,points:[Y.WidgetPositionAlign.TC,Y.WidgetPositionAlign.BC]},constrain:subqspan.ancestor('div.que'),zIndex:1,preventOverlap:!0});overlay.render();Y.on('mouseover',function(){overlay.show()},subqspan);Y.on('mouseout',function(){overlay.hide()},subqspan);feedbackspan.removeClass('accesshide')})}