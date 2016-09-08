<div class="navigationLink" id="navigationLink"><a href="../index.jsp"></a> link </div>
<div id="myAccountPopup" onmouseover="beingHovered('myAccountPopup')" onmouseout="hoverEnded('myAccountPopup')">
    <div id="popupUserImg"><img src="<%= imgUrl %>"/></div>
    <div id="popupUsername"> (String)session.getAttribute("ISMusername") </div>
    <div id="popupUserDeatils">
        <div class="popupUserExtra" id="popupUserAccount">My Account</div>
        <div class="popupUserExtra" id="popupChangePasssword">Change Password</div>
    </div>
</div>


