bplist00�UVX$versionX$objectsY$archiverT$top ���%+8;>BJKNQU$null�	
XNSStringV$class\NSAttributes���_�<div class="code">

public class InitMicHandler<T extends InitMicHandler.OnInitMicInterface> extends Handlerer<T extends InitMicHandler.Oner<T extends InitMicHandler.On {
    private final WeakReference<T> mTipsViewReference;
    InitMicHandler(T t) {
        mTipsViewReference = new WeakReference<T>(t);
    }
    @Override
    public void handleMessage(Message msg) {
        super.handleMessage(msg);
        final T theView = (T) mTipsViewReference.get();
        if (theView == null) {
            return;
        }
        switch (msg.what) {
            case HANDLER_MSG_MIC_START_INIT:
                break;
            case HANDLER_MSG_MIC_INIT_RESULT:
                break;
            default:
                break;
        }
    }
}
</div>�
WNS.keysZNS.objects�������	��WNSColor_NSParagraphStyleVNSFont� !
"#$UNSRGB\NSColorSpaceO'0.2078431373 0.2078431373 0.2078431373 ��&'()Z$classnameX$classesWNSColor�(*XNSObject�
,-./01233367#ZNSTabStops\NSTextBlocks[NSTextLists]NSLineSpacing_NSDefaultTabInterval_NSWritingDirection��
�
�
#?�      #@<      �
9:���&'<=WNSArray�<*�&'?@_NSMutableParagraphStyle�?A*_NSParagraphStyle�CDE
FGHIVNSSizeXNSfFlagsVNSName#@(      ��YHelvetica�&'LMVNSFont�L*�&'OP\NSDictionary�O*�&'RS_NSAttributedString�T*_NSAttributedString_NSKeyedArchiver�WXTroot�    # - 2 7 L R Y b i v x z |sz�����������������	&.1:ITam{�����������������(/8:<>HMTW\ilq������             Y              �