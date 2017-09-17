package {
	import laya.ani.bone.Skeleton;
	import laya.ani.bone.Templet;
	import laya.events.Event;
	import laya.utils.Browser;
	import laya.utils.Stat;
	import laya.webgl.WebGL;
	
	public class Skeleton_SpineVine {
		
		private var mAniPath:String;
		private var mStartX:Number = 200;
		private var mStartY:Number = 500;
		private var mFactory:Templet;
		private var mActionIndex:int = 0;
		private var mCurrIndex:int = 0;
		private var mArmature:Skeleton;
		private var mCurrSkinIndex:int = 0;
		
		private var mFactory2:Templet;
		
		public function Skeleton_SpineVine() {
			WebGL.enable();
			Laya.init(Browser.width, Browser.height);
			Laya.stage.bgColor = "#ffffff";
			Stat.show();
			startFun();
		}
		
		public function startFun():void
		{
			mAniPath = "../../../../res/spine/spineRes5/vine.sk";
			mFactory = new Templet();
			mFactory.on(Event.COMPLETE, this, parseComplete);
			mFactory.on(Event.ERROR, this, onError);
			mFactory.loadAni(mAniPath);
		}
		
		private function onError(e:*):void
		{
			trace("error");
		}
		
		private function parseComplete(fac:Templet):void {
			//创建模式为1，可以启用换装
			mArmature = mFactory.buildArmature(1);
			mArmature.x = mStartX;
			mArmature.y = mStartY;
			mArmature.scale(0.5, 0.5);
			Laya.stage.addChild(mArmature);
			mArmature.on(Event.STOPPED, this, completeHandler);
			play();
		}
		
		private function completeHandler():void
		{
			play();
		}
		
		private function play():void
		{
			mCurrIndex++;
			if (mCurrIndex >= mArmature.getAnimNum())
			{
				mCurrIndex = 0;
			}
			mArmature.play(mCurrIndex,false);
			
		}
	
	}

}