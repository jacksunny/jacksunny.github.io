bplist00�DEX$versionX$objectsY$archiverT$top ���$%&./2:=@U$null�	
XNSStringV$class\NSAttributes����
YNS.string�_�public class InitMicHandler<T extends InitMicHandler.OnInitMicInterface> extends Handler {
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
}�Z$classnameX$classes_NSMutableString�XNSStringXNSObject�
 #WNS.keysZNS.objects����!"��
�VNSFont_NSParagraphStyle�'()
*+,-VNSSizeXNSfFlagsVNSName#@(      ��	YHelvetica�01VNSFont�0�345
6789ZNSTabStops[NSAlignment_NSAllowsTighteningForTruncation� ��;<_NSParagraphStyle�;�>?\NSDictionary�>�AB_NSAttributedString�C_NSAttributedString_NSKeyedArchiver�FGTroot�    # - 2 7 F L S \ c p r t v { � �:?JSeir{����������������������(JLNPRWjmr��������             H              �