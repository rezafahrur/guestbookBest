try
{
    const pageWrapperGallery = document.getElementById('wrapperLoadGallery');
    const pageWrapperGame = document.getElementById('wrapperLoadGame');
    
    setTimeout(() => {    
      try
      {
        pageWrapperGallery.classList.add('hideWrap');
        pageWrapperGallery.classList.remove('showWrap');
      }
      catch
      {

      }
      try
      {
        pageWrapperGame.classList.add('hideWrap');
        pageWrapperGame.classList.remove('showWrap');
      }
      catch
      {

      }
    }, 5890);
}
catch 
{

}