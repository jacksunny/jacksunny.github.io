bplist00���X$versionX$objectsY$archiverT$top ���$12345?BEIORZ[^adps������U$null�	
XNSString_NSAttributeInfo\NSAttributesV$class�����YNS.string�_�public class InitMicHandler<T extends InitMicHandler.OnInitMicInterface> extends Handler {
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
�Z$classnameX$classes_NSMutableString�XNSStringXNSObject�#ZNS.objects� !"������%&+0WNS.keys�'()*����	�,-./�
����_NSParagraphStyle_NSBackgroundColorVNSFontWNSColor�6789:;:=:ZNSTabStops\NSTextBlocks_NSDefaultTabInterval[NSTextLists���#@<ٙ������@A���CDWNSArray�C�FG_NSMutableParagraphStyle�FH_NSParagraphStyle�JKLMNUNSRGB\NSColorSpaceO'0.9921568627 0.9647058824 0.8901960784 ��PQWNSColor�P�STUVWXYVNSSizeXNSfFlagsVNSName#@(      ��]Menlo-Regular�\]VNSFont�\�JK_MNO'0.1490196078 0.5450980392 0.8235294118 ��bc\NSDictionary�b�%ej0�'()*����	�,-.n�
�����JKqMNO&0.3450980392 0.431372549 0.4588235294 ��%ty0�'()*����	�,-.}�
�����JK�MNO0.5215686275 0.6 0 ��%��0�'()*����	�,-.��
�����JK�MNO'0.7960784314 0.2941176471 0.0862745098 ����^NSMutableArray��Cҕ��WNS.dataO�   "   U &  '
"����]NSMutableData���VNSData���_NSAttributedString��_NSAttributedString_NSKeyedArchiverѢ�Troot�    # - 2 7 Y _ h q � � � � � � � � � �ns~�������������������������� '/:ERiuwy{���������������!),5<ELUWY[inux������������������!#%').02468?UW^cegikprtvxz��������UW\jnuz������             �              �